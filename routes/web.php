<?php

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

Route::get('/', function () {
    return view('home',[
 'name'=>"HomePagecomefrom route Value"
]);
});
Route::get('php', function () {
    return view('php',[ 
    "data" =>array(
    "love1" =>"PHP page comefrom route Value1",
    "love2" =>'PHP page comefrom route Value2',
    "love3" =>'PHP page comefrom route Value3',
  )
  ]);
});
Route::get('js', function () {
    return view('js',[ 
    "data" =>array(
    "love1" =>"js page comefrom route Value1",
    "love2" =>'js page comefrom route Value2',
    "love3" =>'js page comefrom route Value3',
  )
  ]);
});
