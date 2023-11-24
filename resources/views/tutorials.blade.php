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
    Tutorials - Programming Learning
@endsection



@section('content')
<div>
    <div>
        <div style = "display:flex; flex-direction: row; width:100%; height:auto; padding: 20px 50px;">
            <div style = "display:flex; flex-direction: column; width: 400px; background-color:#333333; padding: 20px 40px;">
                <div>
                    <h4 style = "color:white">Introduction</h4><hr style = "margin: 10px 0px; color:white;">
                    <a href = "{{route('tutorials', 'introduction')}}" class = "tutorial-item">Compilers</a><hr style = "margin:10px 0px; color:white;">
                </div>
                <div>
                    <h4 style = "color:white">Basics of C++</h4><hr style = "margin: 10px 0px; color:white;">
                    <a class = "tutorial-item" >Structure of a program</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item" >Variables and types</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item" >Constants</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item" >Operators</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item" >Basic Input/Output</a><div style = "margin: 10px 0px;"></div>
                </div>
                <div>
                    <h4 style = "color:white">Program structure</h4><hr style = "margin:0px; color:white;">
                    <a class = "tutorial-item">Control Structures</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Functions</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Overloads and templates</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Name visibility</a><div style = "margin: 10px 0px;"></div>
                </div>
                <div>
                    <h4 style = "color:white">Compound data types</h4><hr style = "margin:0px; color:white;">
                    <a class = "tutorial-item">Arrays</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Character sequences</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Pointers</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Dynamic Memory</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Data structures</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Other data types</a><div style = "margin: 10px 0px;"></div>
                </div>
                <div>
                    <h4 style = "color:white">Classes</h4><hr style = "margin:0px; color:white;">
                    <a class = "tutorial-item">Classes (I)</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Classes (II)</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Pointers</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Special members</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Friendship and inheritance</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Polymorphism</a><div style = "margin: 10px 0px;"></div>
                </div>
                <div>
                    <h4 style = "color:white">Other language features</h4><hr style = "margin:0px; color:white;">
                    <a class = "tutorial-item">Type conversions</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Exceptions</a><div style = "margin: 10px 0px;"></div>
                    <a class = "tutorial-item">Preprocessor directives</a><div style = "margin: 10px 0px;"></div>
                </div>
                <div>
                    <h4 style = "color:white">C++ Standard Library</h4><hr style = "margin:0px; color:white;">
                    <a class = "tutorial-item">Input/Output with files</a><div style = "margin: 10px 0px;"></div>
                </div>
            </div>
            <div style = "display:flex; flex-direction: column; width: 100%; padding: 100px 100px;">
                <div><h1>C++ Language</h1></div><hr>
                <div><p>These tutorials explain the C++ language from its basics up to the newest features introduced by C++11. Chapters have a practical orientation, with example programs in all sections to start practicing what is being explained right away.</p></div><br>
                <div><h3>Introduction</h3></div>
                <div><a href = "{{route('tutorials', 'introduction')}}" class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Compilers</a></div><br>
                <div><h3>Basics of C++</h3></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Structure of a program</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Variables and types</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Constants</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Operators</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Basic Input/Output</a></div><br>
                <div><h3>Program structure</h3></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Control Structures</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Functions</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Overloads and templates</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Name visibility</a></div><br>
                <div><h3>Compound data types</h3></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Arrays</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Character sequences</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Pointers</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Dynamic Memory</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Data structures</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Other data types</a></div><br>

                <div><h3>Classes</h3></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Classes (I)</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Classes (II)</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Special members</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Friendship and inheritance</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Polymorphism</a></div><br>

                <div><h3>Other language features</h3></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Type conversions</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Exceptions</a></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Preprocessor directives</a></div><br>

                <div><h3>C++ Standard Library</h3></div>
                <div><a class = "tutorial-item2" style = "text-decoration: underline; font-size: 18px;">Input/Output with files</a></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection