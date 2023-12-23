@extends('layouts.app')

@section('title')
Login - Programming Learning
@endsection

@section('content') 
<div>
    <div style = "display:flex; flex-direction: row; height: 100vh; width: 100%;justify-content: center;align-items:center;">

    <!-- <div style = "display:flex; flex-direction: column; width: 400px; height: 650px; box-shadow:  0px 0px 2px 1px rgba(0, 0, 0, 0.2); padding: 40px 30px; "> -->
    <div style = "display:flex; flex-direction: column; width: 400px; justify-content: center; height: 100vh;">
    <form style = "box-shadow:  0px 0px 2px 1px rgba(0, 0, 0, 0.2); padding: 40px 30px;" method = "POST" action = "{{Route('login')}}">
    @csrf
        <div>
            <h2>Login</h2>
        </div>
        <div>
            <input class="form-control @error('email') is-invalid @enderror"  name = "email" placeholder="Username or Email" style = "width: 100%; margin: 20px 0px; height: 40px;" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div>
            <input class="form-control @error('password') is-invalid @enderror"  name = "password" placeholder="Password" type = "password" style = "width: 100%; margin: 20px 0px; height: 40px" required>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div>
            <button type = "submit" style = "width: 100%; margin: 20px 0px; height: 40px">Continue</button>
        </div>
        <div style = "width: 100%;">
            <label style = "text-align: center;width: 100%; margin: 0px 0px; height: 40px">or Connect With Social Media</label>
        </div>
        <div>
            <button style = "width: 100%;background-color: #000000;  margin: 20px 0px; height: 40px">Sign in With X</button>
        </div>
        <div>
            <button style = "width: 100%;background-color: #4267B2; margin: 20px 0px; height: 40px">Sign in With Facebook</button>
        </div>
        <div style = "width: 100%; display:flex; flex-direction: row; justify-content: center;">
            <a href = "{{Route('register')}}" style = "color: black;text-align: center;width: 100%; margin: 0px 0px; height: 40px;">Register</a>
        </div>
    </form>
    </div>
</div>

@endsection