<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('dashboard');})->name('dashboard');
Route::get('/profile', [AuthController::class, 'ShowProfile'])->name('profile')->middleware('auth');
Route::get('/tests', [TestController::class, "index"])->name('tests.index');
Route::get('/tests/start/{test}', [TestController::class, "start"])->name('tests.start');
Route::get('/tutorials', function () {return view('tutorials');})->name('tutorials');
Route::get('/tutorials/{tutorial}', [TutorialController::class, "start"])->name('tutorials');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'Login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin', [AdminController::class, 'login']);
Route::post('/admin/create/question', [AdminController::class, 'create_question'])->name('admin.create.question');
Route::post('/admin/create/test', [AdminController::class, 'create_test']);
Route::post('/admin/create/pl', [AdminController::class, 'create_pl'])->name('admin.create.pl');
Route::post('/admin/create/option', [AdminController::class, 'create_option'])->name('admin.create.option');

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
