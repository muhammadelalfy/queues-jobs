<?php

use App\Http\Controllers\ChatsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayOrderController;

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
//Route::get('/', [ChatsController::class,'index']);
Route::get('/', function(){
    return view('chat');
});

Route::get('/', function(){
    return view('chat');
});

Route::get('/messages', [ChatsController::class,'fetchMessages']);
Route::post('/messages', [ChatsController::class,'sendMessage']);
///////////////////////////////payment////////////////////////////////////////////
Route::get('pay',[PayOrderController::class,'store']);
//Route::get('pay',function (){
//    return view('timezone');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('one',[PayOrderController::class,'one']);


////////////////////////////////////////component//////////////////////////////////
Route::get('sample' , function (){

    return view('sample-component' , ['info' => 'helllo info']);
});
/////////////////////////////////////////http///////////////////////////////////////
Route::get('http' , function (){
//    $response = \Illuminate\Support\Facades\Http::post('https://jsonplaceholder.typicode.com/posdddts' , ['userId' => 2]);
//    return $response->throw(); using through

    $response = \Illuminate\Support\Facades\Http::post('https://jsonplaceholder.typicode.com/posts' , ['userId' => 2]);
         return $response->offsetGet('userId');



});
