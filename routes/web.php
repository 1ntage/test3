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

Route::get('/', [ContactController::class, 'index']);
Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact_show');

Route::post('/contact', [ContactController::class, 'store'])->name('contacts_store');
Route::post('/contact/{contact}', [ContactController::class, 'phone_store'])->name('phone_store');
