<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\democontroller;
use App\Http\Controllers\singleActionController;
use App\Http\Controllers\Photocontroller;
use App\Http\Controllers\registrationcontroller;
use App\Http\Controllers\userinfo as ControllersUserinfo;
use App\Http\Controllers\userinfocontroller;
use App\Models\Userinfo;
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


Route::get('/',[democontroller::class, 'index']);
route::get('/about','democontroller@about');
route::get('/about',singleActionController::class);
route::resource('photo',photocontroller::class);
route::get('/register',[registrationcontroller::class,'index']);
route::post('/register',[registrationcontroller::class,'register']);

// Route::get('/about',function(){
//     return view('about');

// });
Route::get('/option',function(){
    return view ('option');

});

route::get('/userinfo',[userinfocontroller::class, 'index'])->name('customer.view');
route::post('/userinfo',[userinfocontroller::class, 'store']);
route::get('/customer/view',[userinfocontroller::class,'view']);
route::get('/userinfo/delete/{id}',[userinfocontroller::class,'delete'])->name('customer.delete');
route::get('/userinfo/edit/{id}',[userinfocontroller::class,'edit'])->name('customer.edit');

// route::get('/userinfo', function(){
//     $userinfo=Userinfo::all();
// echo '<pre>';
// print_r($userinfo);
// });