<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function get_login(){
        return view('auth.login', ['ignore_dashboard_layout' => true]);
    }

    public function get_register(){
        return view('auth.register', ['ignore_dashboard_layout' => true]);
    }

    public function post_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
            return redirect()->route('backend.dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Akun tidak ditemukan atau password salah.'])->withInput();
    }

    public function post_register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(User::where('email', $request->email)->first()){
            return redirect()->back()->withErrors(['email' => 'Email sudah terdaftar.'])->withInput();
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        $user = User::create($data);

        auth()->login($user);

        return redirect()->route('backend.dashboard')->with('success', 'Akun berhasil dibuat.');
    }

    public function get_logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
