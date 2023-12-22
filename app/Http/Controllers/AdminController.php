<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        if (Auth::check()) {
            return view('admin.admin_login');
        }
        else {
            return redirect()->to("/");
        }
    }

    public function login() {
        
    }
}
