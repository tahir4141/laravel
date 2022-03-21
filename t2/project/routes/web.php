<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\project;

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

Route::get('/home',[project::class,'home']);
Route::get('/answers',[project::class,'answer']);
Route::get('profile',function(){
    return view('profile');
});
Route::get('question',function(){
    return view('question');
});
// Route::get('answers',function(){
//     return view('answer');
// });

Route::post('/data',[project::class,'insert']);