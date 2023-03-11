<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitmentController;


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


Route::get('/', function () {
    return view('welcome');
});

Route::resource('recruitments', RecruitmentController::class)->middleware(['auth', 'verified']);
Auth::routes(['verify' => true]);

Route::get('/recruitment', [RecruitmentController::class, 'index' ]);
Route::post('/recruitment', [RecruitmentController::class, 'create' ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
