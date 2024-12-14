<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        $user = auth()->user();
        return view('profile', compact('user'));
    }
    
    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required|numeric',
        ]);
        $user = auth()->user();
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
        $user = auth()->user();
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
        $user = auth()->user();
        return view('accSetting', compact('user'));
    }
    
    public function editPassword(Request $request)
    {
        $data = $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required',
        ]);
        $user = auth()->user();
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
}
