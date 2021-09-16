<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\IntegrationController;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\PartnerController;


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

Route::prefix('contact-us')->name('contact.')->group(function () {
    Route::get('/',[FrontEndController::class,'contact'])->name('contactus');
    Route::get('/franchise',[FrontEndController::class,'franchise'])->name('franchise');
    Route::get('/smartshop',[FrontEndController::class,'smartshop'])->name('smartshop');
    Route::get('/whiteable',[FrontEndController::class,'whiteable'])->name('whiteable');
    Route::get('/investment',[FrontEndController::class,'investment'])->name('investment');

});


Route::get('/about-us',[FrontEndController::class,'about'])->name('about');
Route::get('/privacy-policy',[FrontEndController::class,'privacy'])->name('privacy-policy');
Route::get('/GuideStepbyStep',[FrontEndController::class,'step'])->name('GuideStepbyStep');
Route::get('/HowDropShippingWorks',[FrontEndController::class,'works'])->name('HowDropShippingWorks');
Route::get('/OurReturnsandExchange',[FrontEndController::class,'return'])->name('OurReturnsandExchange');
Route::get('/terms-and-Conditions',[FrontEndController::class,'terms'])->name('terms-and-Conditions');
Route::get('/whatisdropshipping',[FrontEndController::class,'what'])->name('whatisdropshipping');
Route::get('/shipping',[FrontEndController::class,'shipping'])->name('shipping');
Route::get('/cookies-policy',[FrontEndController::class,'cookies'])->name('cookies-policy');
Route::get('/pricing',[FrontEndController::class,'pricing'])->name('pricing');
Route::get('/integrations',[FrontEndController::class,'integrations'])->name('integrations');
Route::get('/partner/{slug?}',[ServiceController::class,'getPartner'])->name('partner');
Route::get('/partner/details/{slug?}',[ServiceController::class,'getPartnerDetails'])->name('partner.details');

Route::prefix('resources')->name('resources.')->group(function () {
    Route::get('/resource/hub',[ResourcesController::class,'resourceHub'])->name('hub');
    Route::get('/webinars',[ResourcesController::class,'webinars'])->name('webinars');
    Route::get('/blogs',[ResourcesController::class,'blogs'])->name('blogs');
    Route::get('/academy',[ResourcesController::class,'academy'])->name('academy');
    Route::get('/guru',[ResourcesController::class,'guru'])->name('guru');
    Route::get('/app',[ResourcesController::class,'app'])->name('app');
    Route::get('/hotproducts',[ResourcesController::class,'hotproducts'])->name('hotproducts');
    Route::get('/tour',[ResourcesController::class,'tour'])->name('tour');
    Route::get('/help',[ResourcesController::class,'help'])->name('help');
    Route::get('/freetool',[ResourcesController::class,'freetool'])->name('freetool');
});

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
    Route::get('/seller',[ServiceController::class,'seller'])->name('seller');

});

Route::get('/integration/{slug?}',[IntegrationController::class,'index'])->name('integration');

Route::post('/contact',[PartnerController::class,'store'])->name('contact.store');
Route::get('/blog',[PartnerController::class,'index'])->name('contact.blog');
Route::post('/blog/create',[PartnerController::class,'create'])->name('blog.create');


