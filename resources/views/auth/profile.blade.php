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

@endsection