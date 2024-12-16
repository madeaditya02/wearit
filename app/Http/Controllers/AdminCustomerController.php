<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCustomerController extends Controller
{
    public function CustomerAll(Request $request) {
        $search = $request->input('search');
        $users = User::doesntHave('admin')->with('transaksi');
        if ($search) {
            $users = $users->where('first_name', 'LIKE', "%$search%")->orWhere('last_name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->paginate(10);
            $users->appends(['search' => $search]);
        } else {
            $users = $users->paginate(10);
        }
        return view("admin.CustomerAll", compact('users'));
    }

    public function CustomerDetail(User $user, Request $request){
        $search = $request->input('search');
        if ($search) {
            $user->load(['transaksi' => function ($query) use ($search) {
                $query->where('id_transaksi', $search);
            }, 'alamat', 'transaksi.produk', 'transaksi.produk.diskon']);
        } else {
            $user->load(['transaksi', 'alamat', 'transaksi.produk', 'transaksi.produk.diskon']);
        }
        return view("admin.CustomerDetail", compact('user', 'search'));
    }
    
    public function editCustomer(User $user){
        return view("admin.EditCustomer", compact('user'));
    }

    public function updateCustomer(Request $request)
    {
        $data = $request->validate([
            'id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required|numeric',
        ]);
        $user = User::find($data['id']);
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
        return redirect("/admin/customer/$user->id_user/edit")->with('alert', ['icon' => 'success', 'title' => 'Customer', 'text' => 'Customer data updated successfully']);
    }
    
    public function deleteCustomer(Request $request) {
        $data = $request->validate(['id' => 'required']);
        User::destroy($data['id']);
        return redirect('/admin/customer');
    }
}
