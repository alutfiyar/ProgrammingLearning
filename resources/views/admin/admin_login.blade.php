@extends('layouts.app')

@section('title')
$$$$ADMIN$$$$
@endsection

@section('content') 
<div>
    <div style = "background-color: rgb(50, 50, 50); display:flex; flex-direction: row; height: 100vh; width: 100vw;justify-content: center;align-items:center;">

    <div style = "display:flex; flex-direction: column; justify-content: center; width: 400px; height: 100vh;">
    <!-- <div style = "display:flex; flex-direction: column; width: 400px; height: 650px; box-shadow:  0px 0px 2px 1px rgba(0, 0, 0, 0.2); padding: 40px 30px; "> -->
        <form style = "box-shadow:  0px 0px 2px 1px rgba(150, 150, 150, 0.5); padding: 40px 30px;" method = "POST" action = "{{Route('login')}}">
        @csrf
            <div>
                <h2 style = "color: white;">Admin Panel</h2>
            </div>
            <div>
                <input class="form-control @error('email') is-invalid @enderror"  name = "email" placeholder="Username" style = "width: 100%; margin: 20px 0px; height: 40px;background-color: rgb(50, 50, 50); color: white;" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div>
                <input class="form-control @error('password') is-invalid @enderror"  name = "password" placeholder="Password" type = "password" style = "width: 100%; margin: 20px 0px; height: 40px; background-color: rgb(50, 50, 50);color:white;" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <button type = "submit" style = "width: 100%; margin: 20px 0px; height: 40px; background-color: rgb(100, 100, 100);">Continue</button>
            </div>
        </form>
    </div>
</div>

@endsection