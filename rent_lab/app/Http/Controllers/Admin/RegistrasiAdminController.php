<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Tool;
use App\Models\BorrowHistory;
use App\Models\Admin; // Pastikan model Admin diimpor
use Illuminate\Support\Facades\Hash;




class RegistrasiAdminController extends Controller{
     // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('admin.admin_registrasi');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Menyimpan data ke database
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        \Log::info('Admin created successfully.', $request->all());

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('admin_login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
?>