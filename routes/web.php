<?php


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/cards', 'CardsController@index');

Route::get('/cards/{card}', 'CardsController@show');

//Route::get('/', function () {
//    $pessoas = ['Portela', 'Pablo', 'Daniel'];
////    return view('welcome', compact(pessoas));
////    return view('welcome')->withPessoas($pessoas);
////    return view('welcome')->with('pessoas', $pessoas);
//    return view('welcome', ['pessoas'=> $pessoas]);
//});

//Route::get('/about', function(){
//    return view('about');
//});
