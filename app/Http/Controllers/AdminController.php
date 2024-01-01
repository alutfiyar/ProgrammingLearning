<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tests; 
use App\Models\Questions;
use App\Models\Options;
use App\Models\ProgrammingLanguages; 

class AdminController extends Controller
{
    public function index() {
        if (Auth::check()) {
            if (Auth::guard('admin')->check()) {
                $tests = Tests::all();
                $questions = Questions::all();
                $options = Options::all();
                $pl = ProgrammingLanguages::all();
                

                return view('admin.admin_panel', compact('tests', 'questions', 'options', 'pl'));
            }
            else {
                return view('admin.admin_login');
            }
            
        }
        else {
            return redirect()->to("/");
        }
    }

    public function login(Request $request) {
        $credentials = $request->only('username', 'password');
        $tests = Tests::all();
        $questions = Questions::all();
        $options = Options::all();
        $pl = ProgrammingLanguages::all();
        if (Auth::guard('admin')->attempt($credentials)) {
            return view('admin.admin_panel', compact('tests', 'questions', 'options', 'pl'));
        }
        else {
            return redirect('admin')->withErrors(['error' => 'incorrect']);
        }
    }

    

    public function create_test() {
        echo "test";
    }

    public function create_option(Request $request) {
        $errorMessage = 'success';
        $tests = Tests::all();
        $questions = Questions::all();
        $options = Options::all();
        $pl = ProgrammingLanguages::all();
        $option_ru = $request->input('option_ru');
        $option_eng = $request->input('option_eng');
        if (!empty($option_ru) && !empty($option_eng)) {
            $check_1 = Options::where('option_ru', '=', $option_ru)->get();
            $check_2 = Options::where('option_eng', '=', $option_eng)->get();
            if (empty($check_1[0]) and empty($check_2[0])) {
                $row = array(
                    'option_ru' => $option_ru,
                    'option_eng' => $option_eng,
                );
                Options::create($row);
            }
            else {
                $errorMessage = "row ". 'already exists';
            }
        }
        else {
            $errorMessage = "row can not be empty";
        }
        return view('admin.admin_panel', compact('tests', 'questions', 'options', 'pl', 'errorMessage'));
    }

    public function create_question(Request $request) {
        $errorMessage = 'success';
        $tests = Tests::all();
        $questions = Questions::all();
        $options = Options::all();
        $pl = ProgrammingLanguages::all();
        $question_ru = $request->input('question_ru');
        $question_eng = $request->input('question_eng');
        $concept = $request->input('question_concept');
        if (!empty($question_ru) && !empty($question_eng) && !empty($concept)) {
            $check_1 = Questions::where('question_ru', '=', $question_ru)->get();
            $check_2 = Questions::where('question_eng', '=', $question_eng)->get();
            $check_3 = Questions::where('concept', '=', $concept)->get();
            if ((empty($check_1[0]) and empty($check_2[0])) and empty($check_3[0])) {
                $programming_lang = ProgrammingLanguages::where('language', '=', $request->input('programming_lang_id'))->first();
                $option_1 = Options::where('option_ru', '=', $request->input('option1_id'))->first();
                $option_2 = Options::where('option_ru', '=', $request->input('option2_id'))->first();
                $option_3 = Options::where('option_ru', '=', $request->input('option3_id'))->first();
                $option_4 = Options::where('option_ru', '=', $request->input('option4_id'))->first();
                $answer = Options::where('option_ru', '=', $request->input('answer_id'))->first();
                $row = array(
                    'question_ru' => $question_ru,
                    'question_eng' => $question_eng,
                    'diff_level' => $request->input('diff_level'),
                    'concept' => $request->input('question_concept'),
                    'programming_lang_id' => $programming_lang->id,
                    'option1_id' => $option_1->id,
                    'option2_id' => $option_2->id,
                    'option3_id' => $option_3->id,
                    'option4_id' => $option_4->id,
                    'answer_id' => $answer->id,
                );

                Questions::create($row);
            }
            else {
                $errorMessage = "row ". 'already exists';
                
            }
        }
        else {
            $errorMessage = "row can not be empty";
        }
        return view('admin.admin_panel', compact('tests', 'questions', 'options', 'pl', 'errorMessage'));
    }

    public function create_pl(Request $request) {
        $lang = $request->input('language');
        $errorMessage = 'success';
        $tests = Tests::all();
        $questions = Questions::all();
        $options = Options::all();
        $pl = ProgrammingLanguages::all();
        if (empty($lang)) {
            $errorMessage = "row can not be empty";
            return view('admin.admin_panel', compact('tests', 'questions', 'options', 'pl', 'errorMessage'));
        }
        $row = array('language' => $request->input('language'));
        $ret = ProgrammingLanguages::where('language', '=', $row)->get();
        if (empty($ret[0])) {
            ProgrammingLanguages::create($row);
        }
        else {
            $errorMessage = "row " . $ret[0]->language .'already exists';
        }
        return view('admin.admin_panel', compact('tests', 'questions', 'options', 'pl', 'errorMessage'));
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
