@extends('layouts.app')

@section('header-items')
    @guest
        <li><a href="/login">Sign in</a></li>
    @else
        <li><a href = "/profile">Profile</a></li>
    @endguest
@endsection
@include('layouts.header')

@section('title')
    {{Auth::user()->name}}Tutorials - Programming Learning
@endsection



@section('content')
<div style = "width: 100%;">
    <a href = "{{Route('logout')}}" type = "submit" style = "color: white; padding: 0px 100px; width: 500px;background-color: red; margin: 20px 0px; height: 40px">Logout</a>
</div>
@endsection