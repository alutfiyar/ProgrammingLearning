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
    Tutorial - {{ $data }}
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
                <div><h1>Compilers</h1></div><hr>
                <div><p>The essential tools needed to follow these tutorials are a computer and a compiler toolchain able to compile C++ code and build the programs to run on it.</p></div>
                <div><p>C++ is a language that has evolved much over the years, and these tutorials explain many features added recently to the language. Therefore, in order to properly follow the tutorials, a recent compiler is needed. It shall support (even if only partially) the features introduced by the 2011 standard.</p></div>
                <div><p>Many compiler vendors support the new features at different degrees. See the bottom of this page for some compilers that are known to support the features needed. Some of them are free!</p></div>
                <div><p>If for some reason, you need to use some older compiler, you can access an older version of these tutorials here (no longer updated).</p></div>

                <br>
                <div><h2>What is a compiler?</h2></div><hr>
                <div><p>Computers understand only one language and that language consists of sets of instructions made of ones and zeros. This computer language is appropriately called machine language.</p></div><br>

                <div><p>A single instruction to a computer could look like this:</p></div>
                <div><table><tr><td>00000</td><td>10011110</td></tr></table></div><br>
                <div><p>A particular computer's machine language program that allows a user to input two numbers, adds the two numbers together, and displays the total could include these machine code instructions:</p></div><br>
                <div><table><tr><td>00000</td><td>10011110</td></tr><tr><td>00000</td><td>10011110</td></tr><tr><td>00000</td><td>10011110</td></tr><tr><td>00000</td><td>10011110</td></tr><tr><td>00000</td><td>10011110</td></tr><tr><td>00000</td><td>10011110</td></tr></table></div><br>
                <div><p>As you can imagine, programming a computer directly in machine language using only ones and zeros is very tedious and error prone. To make programming easier, high level languages have been developed. High level programs also make it easier for programmers to inspect and understand each other's programs easier.</p></div>
                <table class="snippet"><tbody><tr><td class="rownum"><pre><code>1<br>2<br>3<br>4<br>5<br>6<br>7<br></code></pre></td>
                    <td class="source"><pre><code><var>int</var> a, b, sum;
                
                    cin &gt;&gt; a;
                    cin &gt;&gt; b;
                        
                    sum = a + b;
                    cout &lt;&lt; sum &lt;&lt; endl;</code></pre></td>
                    </tr></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection