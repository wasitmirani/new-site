<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\IntegrationController;
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
Route::get('/partner/{slug?}',[ServiceController::class,'getPartner'])->name('partner');
Route::get('/partner/details/{slug?}',[ServiceController::class,'getPartnerDetails'])->name('partner.details');
Route::prefix('partner')->name('partner.')->group(function () {

    Route::get('/exporter',[ServiceController::class,'exporter'])->name('exporter');
    Route::get('/wholesaler',[ServiceController::class,'wholesaler'])->name('wholesaler');
    Route::get('/bulk-wholesaler',[ServiceController::class,'bulkWholesaler'])->name('bulk.wholesaler');
    Route::get('/one-piece-wholesaler',[ServiceController::class,'onePieceWholesaler'])->name('onePiece.wholesaler');
    Route::get('/vendor',[ServiceController::class,'vendor'])->name('vendor');
    Route::get('/app',[ServiceController::class,'app'])->name('app');
    Route::get('/guru',[ServiceController::class,'guru'])->name('guru');
    Route::get('/franchise',[ServiceController::class,'franchise'])->name('franchise');
    Route::get('/whitelabel',[ServiceController::class,'whitelabel'])->name('whitelabel');
    Route::get('/investment',[ServiceController::class,'investment'])->name('investment');
    Route::get('/smartshop',[ServiceController::class,'smartshop'])->name('smartshop');

});

Route::get('/integration/{slug?}',[IntegrationController::class,'index'])->name('integration');
