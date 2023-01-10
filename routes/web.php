<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/one-page', [FrontendController::class, 'onePage'])->name('onePage');
Route::get('/send', [FrontendController::class, 'sendMessage'])->name('sendmessage');
Route::get('/sendMessage' ,[FrontendController::class, 'sendMessageBtn'])->name('sendMessage');
Route::get('/clients', [FrontendController::class, 'getMessage'])->name('GetMessage');