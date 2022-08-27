<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

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

Route::get('/', function () {
    return view('welcome');
});
//Route::view('/','insertRead');
Route::post('insertData',[mycontroller::class,'insert']);
Route::get('/', [mycontroller::class,'readdata']);
//Route::view('update','updateview');
//Route::get('updatedelete',[mycontroller::class,'updateordelete']);
//Route::post('updatedata',[mycontroller::class,'update']);
Route::get('/updatedelete/{id}', [mycontroller::class,'updateordelete']);
Route::post('/updatedata/{id}', [mycontroller::class,'update']);
Route::get('/delete/{id}', [mycontroller::class,'delete']);
?>
