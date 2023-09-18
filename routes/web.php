<?php

use App\Http\Controllers\FrontendController;
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

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/index',[FrontendController::class,'index'])->name('index');
Route::get('cart',[FrontendController::class,'cart'])->name('cart');
Route::get('/single',[FrontendController::class,'single'])->name('single');
Route::get('/aboutus',function(){
  return view('Frontend.pages.aboutus');
});
Route::get('/contactus',function(){
  return view('Frontend.pages.contactus');
});

Route::get('/brand',function(){
  return view('Frontend.pages.brand');
});


Route::get('/rangeofcar',function(){
  return view('Frontend.pages.rangeofcar');
});

Route::get('/products',function(){
  return view('Frontend.pages.products');
});
Route::get('/porsche',function(){
  return view('Frontend.pages.porsche');
});
Route::get('/huyndai',function(){
  return view('Frontend.pages.huyndai');
});
Route::get('/mercedes',function(){
  return view('Frontend.pages.mercedes');
});

Route::get('/smallcar',function(){
  return view('Frontend.pages.smallcar');
});
Route::get('/van',function(){
  return view('Frontend.pages.van');
});
Route::get('/sedan',function(){
  return view('Frontend.pages.sedan');
});
Route::get('/jeep',function(){
  return view('Frontend.pages.jeep');
});
Route::get('/preowned',function(){
  return view('Frontend.pages.preowned');
});
Route::get('/store',function(){
  return view('Frontend.pages.store');
});


Route::get('/detail',[FrontendController::class,'detail'])->name('detail');
Route::get('/detailcar',[FrontendController::class,'detailcar'])->name('detailcar');


route::get('/footer',function(){
    return view('footer');
});
Route::get('/frontend/detail',[FrontendController::class,'single'])->name('single');
