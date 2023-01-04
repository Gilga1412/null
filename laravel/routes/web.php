<?php

use App\Http\Controllers\AuthenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/dull', function () {
    return view('welcome');
});
//main route
Route::get('/', function () {
    return view('Home',[
        'title' => 'Home',
    ]);
});

Route::get('/register', function () {
    return view('Register',[
        'title' => 'Register',
    ]);
});
Route::get('/login', function () {
    return view('Login',[
        'title' => 'Login',
    ]);
});

Route::get('/', [HomeController::class, 'home']);
Route::post('/register', [AuthenController::class, 'register']);
Route::post('/loginpage', [AuthenController::class, 'login']);
Route::get('/loginpage', [AuthenController::class, 'login']);
