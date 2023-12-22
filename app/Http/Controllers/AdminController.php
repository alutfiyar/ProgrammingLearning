<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgrammingLanguage;

class AdminController extends Controller
{
    public function enter() {
        $programming_language = ProgrammingLanguage::all();
        return view('admin.admin', compact('programming_language'));
    }

    public function createPL(Request $request) {
        $request->validate([
            'language' => 'required|unique:programming_languages|max:255',
        ]);

        $pl = new ProgrammingLanguage;
        $pl->language = $request->input('pl_language');
        $pl->save();
        return redirect('/admin')->with('success', 'Язык программирования успешно добавлен');
    }
}
