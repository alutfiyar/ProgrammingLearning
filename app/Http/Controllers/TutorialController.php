<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function start($tutorial) {
        $url = 'tutorials' . '.' . $tutorial;
        return view($url, ['data' => $tutorial]);
    }
}
