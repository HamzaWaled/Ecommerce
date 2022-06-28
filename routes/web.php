<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\login;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Mail;

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



//login/logout
Route::get('/login', [App\Http\Controllers\login::class, 'index'])->name('login_index');
Route::get('/logout', [App\Http\Controllers\login::class, 'logout'])->name('logout');
Route::post('/login', [App\Http\Controllers\login::class, 'store'])->name('login_post');
//end login/logout



//register
Route::get('/Register', [App\Http\Controllers\WelcomeController::class, 'Register'])->name('Register_page');
Route::post("/save-user",[WelcomeController::class, "Storing"]);

//cart
Route::get('/CART', [App\Http\Controllers\WelcomeController::class, 'cart'])->name('CART_page');

//products
Route::get('/Products', [App\Http\Controllers\WelcomeController::class, 'product'])->name('product_page');
