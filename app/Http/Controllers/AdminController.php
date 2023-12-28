<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        if (Auth::check()) {
            if (Auth::guard('admin')->check()) {
                return view('admin.admin_panel');
            }
            else {
                return view('admin.admin_login');
            }
            
        }
        else {
            return redirect()->to("/");
        }
    }

    public function login(Request $request) {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return view('admin.admin_panel');
        }
        else {
            return redirect('admin')->withErrors(['error' => 'incorrect']);
        }
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
