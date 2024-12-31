<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.admin_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('home_admin');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

 public function logout()
    {
        Auth::guard('admin')->logout(); // Logout dari guard admin
        return redirect()->route('admin_login')->with('success', 'Logout berhasil!');
    }
}
