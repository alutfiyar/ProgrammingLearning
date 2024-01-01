<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Validator;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function Login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->withSuccess('Signed in');
        }
        return redirect("login")->withErrors(['email' => 'Login details are not valid']);
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        // Валидация данных
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|same:repassword',
        ]);

        $data = $request->all();
        $reg = $this->Create($data);
        auth()->login($reg);
        // $user = User::create($request(['name', 'email', 'password']));
        
        return redirect()->to('/');
    }
    public function Create(array $data) {
        $hashed = Hash::make($data['password'], [
            'rounds' => 12,
        ]);

        return User::create([
            'name' => $data['username'],
            'email' => $data['email'],
            'password' => $hashed
        ]);
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
    public function ShowProfile() {
        return view('auth.profile');
    }
}
