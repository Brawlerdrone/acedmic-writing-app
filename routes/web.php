<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\OrderPaperForm;
use Illuminate\Support\Facades\Route;

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
//Home Page
Route::get('/' , [HomeController::class , 'index'])->name('home');

Route::get('home', [HomeController::class, 'dashboard']);

//Route::get('getServiceDetails/{id}', [HomeController::class , 'getServiceDetails'])->name('getServiceDetails');
Route::auth();
Route::get('get-price/{id}', [HomeController::class , 'getPrice']);

Route::get('order', [HomeController::class, 'order'])->name('order');


Route::get('/getServicePrice/{id}',[OrderPaperForm::class, 'getServicePrice']);

Route::get('/getPapersUnderService/{id}', [OrderPaperForm::class, 'getPaperUnderService']);