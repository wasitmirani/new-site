<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;

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

Route::get('/',[FrontEndController::class,'index'])->name('home');
Route::get('/contact-us',[FrontEndController::class,'contact'])->name('contact');
Route::get('/about-us',[FrontEndController::class,'about'])->name('about');
Route::get('/pricing',[FrontEndController::class,'pricing'])->name('pricing');
Route::get('/integrations',[FrontEndController::class,'integrations'])->name('integrations');
