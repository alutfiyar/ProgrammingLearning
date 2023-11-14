<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        return view('tests.tests');
    }

    public function start($test) {
        echo $test;
    }
}
