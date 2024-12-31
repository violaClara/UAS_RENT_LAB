<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Tool;
use App\Models\BorrowHistory;

class LogoutAdminController extends Controller{
    public function index(Request $request)
    {
      
        return view('admin.admin_logout', compact('borrowHistories', 'tools'));
    }
}
?>