@extends('layouts.app')


@section('title')
Register - Programming Learning
@endsection

@section('content') 
<div style = "display:flex; flex-direction: row; height: 100vh; width: 100%;justify-content: center;align-items:center;">

    <div style = "display:flex; flex-direction: column; width: 800px; height: 600px; box-shadow:  0px 0px 2px 1px rgba(0, 0, 0, 0.2); padding: 40px 30px; ">
    <form method = "POST" action = "{{Route('register')}}">
        @csrf
        <div>
            <h3>Registration</h3>
        </div>

        <div style = "display: grid; gap: 10px 50px; margin: 20px 0px;">
            <div style = "grid;grid-column-start: 1;">
                <div>
                    <h6>Full Name</h6>
                    <input class="form-control @error('name') is-invalid @enderror" name = "name" type = "text" placeholder = "Enter your name" style = "padding: 0px 15px; width: 100%; height: 40px;" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
            </div>
            <div style = "grid;grid-column-start: 2;">
                <div>
                    <h6>Username</h6>
                    <input class="form-control @error('username') is-invalid @enderror"  name = "username" type = "text" placeholder = "Enter your username" style = "padding: 0px 15px; width: 100%; height: 40px;" required>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>
            <div style = "grid;grid-column-start: 1;">
                <div>
                    <h6>Email</h6>
                    <input class="form-control @error('email') is-invalid @enderror"  name = "email" type = "email" placeholder = "Enter your email" style = "padding: 0px 15px; width: 100%; height: 40px;" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div style = "grid;grid-column-start: 2;">
                <div>
                    <h6>Phone Number</h6>
                    <input class="form-control @error('phone') is-invalid @enderror"   name = "phone" type = "tel" placeholder = "Enter your number" style = "padding: 0px 15px; width: 100%; height: 40px;" required>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div style = "grid;grid-column-start: 1;">
                <div>
                    <h6>Password</h6>
                    <input class="form-control @error('password') is-invalid @enderror"   name = "password" type = "password" placeholder = "Enter your password" style = "padding: 0px 15px; width: 100%; height: 40px;" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div style = "grid;grid-column-start: 2;">
                <div>
                    <h6>Confirm Password</h6>
                    <input class="form-control" name = "repassword" type = "password" placeholder = "Confirm your password" style = "padding: 0px 15px; width: 100%; height: 40px;" required>
                </div>
            </div>
        </div>
        <div>
            <h6>Gender</h6>
        </div>
        <div>
            <button type = "submit" style = "width: 100%;background-color: #4267B2; margin: 20px 0px; height: 40px">Register</button>
        </div>
        <div style = "width: 100%; display:flex; flex-direction: row; justify-content: center;">
            <a href = "{{Route('login')}}" style = "color: black;text-align: center;width: 100%; margin: 0px 0px; height: 40px;">Login</a>
        </div>
        
    </form>
@endsection