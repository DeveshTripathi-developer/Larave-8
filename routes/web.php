<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile;
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
    return view('home');
});

Route::view('user-login', 'login');
Route::post('user-login', [Profile::class, 'Login']);

Route::view('user-registration', 'registration');
Route::post('user-registration', [Profile::class, 'Registration']);

Route::get('logout', [Profile::class, 'Logout']);
