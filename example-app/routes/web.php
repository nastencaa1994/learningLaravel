<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('welcome');});
Route::get('/posts', function (){return view('posts/index');});
Route::get('/posts/{character_code}', function (){return view('posts/post');});



Route::get('my_page', 'App\Http\Controllers\MyPlaceController@index');
