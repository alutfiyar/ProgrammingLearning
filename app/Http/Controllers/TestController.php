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
        // Путь к JSON файлу теста
        $jsonFilePath = "test_data"."/".$test .".json";
        // Проверка существования файла
        if (Storage::exists($jsonFilePath)) {
            // Чтение JSON файла
            $json = File::get($jsonFilePath);
            $testData = json_decode($json);
    
            // Отправка данных теста в представление
            return view('tests.start', ['testData' => $testData]);
        } else {
            // Создание директории, если она не существует
            File::makeDirectory(dirname($jsonFilePath), $mode = 0777, true, true);
    
            echo "Not found";
            echo $test;
            $testData['title'] = 'jajaj';
            //return view('tests.start', compact('testData'));
        }
    
        // Обработка случая, если файл не найден
        abort(404);
    }

    
}
