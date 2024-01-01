<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class TestController extends Controller
{
    public function index() {
        return view('tests.tests');
    }
    public function start($test) {
        $jsonFilePath = "test_data"."/".$test .".json";
        if (File::exists($jsonFilePath)) {
            $json = File::get($jsonFilePath);
            $testData = json_decode($json);

            return view('tests.start', ['testData' => $testData]);
        } else {
            File::makeDirectory(dirname($jsonFilePath), $mode = 0777, true, true);

            echo "Not found";
            echo $test;
            $testData['title'] = 'jajaj';
            //return view('tests.start', compact('testData'));
        }

        abort(404);
    }
}
