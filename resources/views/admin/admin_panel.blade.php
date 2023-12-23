@extends('layouts.app')

@section('title')
$$$$ADMIN$$$$
@endsection

@section('content') 
<div>
    <div>
        <a href = "{{Route('admin_logout')}}">Logout</a>
    </div>
</div>
@endsection