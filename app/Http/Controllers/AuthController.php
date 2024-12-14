<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Database\Query\JoinClause;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function submitAccount(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|numeric',
            'password' => 'required|confirmed',
        ]);
        $fullName = $data['first_name']." ".$data['last_name'];
        User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'photo_profil' => "https://ui-avatars.com/api/?name=$fullName",
            'password' => Hash::make($data['password']),
        ]);
        return redirect('/login');
    }
    public function login()
    {
        return view('login');
    }

    public function loginAccount(Request $request)
    {
        // Validasi input email dan password
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember = !!$request->input('remember');
        
        $user = User::where('email', $credentials['email'])->get()->first();

        if ($user->social && !$user->password) {
            return redirect('/login/oauth');
        }

        // Cek kredensial menggunakan Auth
        if (Auth::attempt($credentials, $remember)) {
            // Regenerate session untuk keamanan
            $request->session()->regenerate();

            // Redirect ke dashboard atau halaman lain setelah login berhasil
            return redirect()->intended('/');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email'); // Menyimpan input email agar tidak perlu mengetik ulang
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
    
    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required|numeric',
        ]);
        $user = Auth::user();
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->phone_number = $data['phone_number'];
        if ($request->hasFile('pictureFile')) {
            [$fileName] = explode('@', $user->email);
            $extension = $request->file('pictureFile')->getClientOriginalExtension();
            $path = $request->file('pictureFile')->storeAs('user-profile', "$fileName.$extension", 'public');
            $url = asset('storage/user-profile/'."$fileName.$extension");
            $user->photo_profil = $url;
        }
        $user->save();
        return redirect('/profile')->with('alert', ['icon' => 'success', 'title' => 'Profil', 'text' => 'Profile updated successfully']);
    }
    
    public function history()
    {
        $user = Auth::user();
        // $user->load(['transaksi', 'transaksi.produk']);
        // $products = $user->transaksi->pluck('produk')->flatten();
        // DB::table('transaksi')->where('id_user', $user->id)->join('');
        $products = DB::table('detail_transaksi')
        ->join('transaksi', 'transaksi.id_transaksi', '=', 'detail_transaksi.id_transaksi')
        ->join('produk', 'produk.id', '=', 'detail_transaksi.id_produk')
        ->join('users', function (JoinClause $join) use ($user) {
            $join->on('users.id_user', '=', 'transaksi.id_user')->where('users.id_user', $user->id_user);
        })->get();
        // ->join('users', 'users.id_user', '=', 'transaksi.id_user')
        // dd($products);
        return view('history', compact('user', 'products'));
    }
    
    public function accSetting()
    {
        $user = Auth::user();
        $noPass = !$user->password && $user->social;
        return view('accSetting', compact('user', 'noPass'));
    }
    
    public function editPassword(Request $request)
    {
        $user = Auth::user();
        $rules = [
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required',
        ];
        if (!($user->social && !$user->password)) {
            $rules['old_password'] = 'required|current_password';
        }
        $data = $request->validate($rules);
        $user->password = Hash::make($data['new_password']);
        $user->save();
        return redirect()->back()->with('alert', ['icon' => 'success', 'title' => 'Change Password', 'text' => 'Password successfully changed']);
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        $findUser = User::where('email', $user->email)->get()->first();
        if (!$findUser) {
            $findUser = User::create([
                'first_name' => $user->user['given_name'],
                'last_name' => $user->user['family_name'],
                'email' => $user->email,
                'phone_number' => "",
                'photo_profil' => $user->avatar,
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'social' => true
            ]);
        }
        Auth::login($findUser);
        return redirect('/');
    }
}
