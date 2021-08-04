<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\SiteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[SiteController::class,'index']);
Route::get('/login',[SiteController::class,'login'])->middleware('protectedpage');
Route::post('/login',[SiteController::class,'confirm_login']);
Route::get('/register',[SiteController::class,'register'])->middleware('protectedpage');
Route::post('/register',[SiteController::class,'register_confirm']);
Route::get('/newdiscussion',[SiteController::class,'newdiscussion']);
Route::get('/dashboard',[SiteController::class,'dashboard']);



 Route::get('/logout', function () {
   if(session()->has('username')){
       session()->pull('username');
   }

   return redirect ('/login');
 });
