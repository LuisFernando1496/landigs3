<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/personal', function () {
    return view('personal');
})->name('personal');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/agradecimiento', function () {
    return view('agradecimiento');
})->name('agradecimiento');

Route::post('/email/send',[ContactController::class,'sendContactEmail'])->name('contact.send');
