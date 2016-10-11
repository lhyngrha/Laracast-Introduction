<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $pessoas = ['Portela', 'Pablo', 'Daniel'];
//    return view('welcome', compact(pessoas));
//    return view('welcome')->withPessoas($pessoas);
//    return view('welcome')->with('pessoas', $pessoas);
    return view('welcome', ['pessoas'=> $pessoas]);
});


Route::get('/about', function(){
    return view('about');
});