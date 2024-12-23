<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeUserController extends Controller{
    public function index()
    {
        return view('home_user');
    }
}
?>