@extends('layouts.app')


@section('title')
$$$$$$$$$$$$$$$$$$$ADMIN$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
@endsection

@section('content')

<div>
    <div>
        <div>
            <div>
                <form method="POST" action="{{ url('admin/createPL') }}">
                @csrf
                    <label>Insert Programming Language</label>
                    <input value = "C" name = "pl_language" type = "text"></input>
                    <input type = "submit"></input> 
                </form>
                
            </div>
            
        </div>
    </div>
</div>
    
    
@endsection