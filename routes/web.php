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





Route::get('/recruitment', [RecruitmentController::class, 'index' ]);
Route::post('/create', [RecruitmentController::class, 'create' ]);



Route::resource('recruitments', RecruitmentController::class)->middleware(['auth', 'verified']);
Auth::routes(['verify' => true]);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/', function () {
//     return view('welcome');
// });




