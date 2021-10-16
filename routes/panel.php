<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelProfile;
// Customer Routes
Route::get('/admin', function () {
    return view('panel/login');
});
Route::prefix("admin")->group(function () {

    Route::view('login', 'panel/login');
    Route::post('login', [PanelProfile::class, "Login"]);

    Route::view('upload-product', 'panel/upload-product');
});
