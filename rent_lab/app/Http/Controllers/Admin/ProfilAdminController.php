<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Tool;
use App\Models\BorrowHistory;
use Illuminate\Support\Facades\Auth;

class ProfilAdminController extends Controller{
 public function index()
    {
        // Ambil data pengguna yang sedang login
        $admin = Auth::guard('admin')->user();

        // Tampilkan view profil admin dengan data pengguna
        return view('admin.admin_profil', compact('admin'));
    }
}
?>