<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    session_start();
    if (isset($_SESSION['gebruikersnaam'])) {
        return redirect()->route('mijn');
    } else {
        return view('login');
    }

});

Route::get('/account/login', function () {
    return view('login');
})->name("login");


Route::get('/account/register', function () {
    return view('register');
})->name('register');

Route::get('/account/logout', function () {
    session_destroy();
    return redirect()->route('login');
});

Route::get('/mijn', [AuthController::class, 'gebruikersInfo'], function () {
    session_start();
    if (isset($_COOKIE['gebruikersnaam'])) {
        return view('omgeving');
    } else {
        return redirect()->route('login');
    }
})->name('mijn');

Route::get('/trainer/maak', function () {
    return view('create');
});

Route::get("/mijn/sessies", function() {
    return view('alleSessies');
});

Route::post('/api/register', [AuthController::class, 'register']);
Route::post('/api/login', [AuthController::class, 'login']);
Route::post('/api/checkLogin', [AuthController::class, 'checkLogin']);

Route::get('/api/sessies/ophalen', [SessieController::class, 'laadSessies']);
Route::post('/api/sessies/aanmaken', [SessieController::class, 'maakSessie']);
Route::post('/api/sessies/joinen', [SessieController::class, 'joinSessie']);
