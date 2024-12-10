<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function submitAccount(Request $request) {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|numeric',
            'password' => 'required|confirmed',
        ]);
        User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'photo_profil' => '',
            'password' => Hash::make($data['password']),
        ]);
        return redirect('/login');
    }

    public function profile() {
        return view('profile');
    }

    public function history() {
        return view('history');
    }

    public function accSetting(){
        return view('accSetting');
    }
}
