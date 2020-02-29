<?php

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
    return view('index');
});

Route::get('/', function () {
   $greeting = 'Hello';   
   return view('index')->with('greeting', $greeting);
});


Route::get('/', function () {
    $greeting='World1';
    $name = 'name1';
    return view('index', compact('greeting', 'name'));
});

Route::get('/', function () {
    return view('index')->with([
        'greeting'  => 'World2',
        'name'      => 'name2'
    ]);
});

Route::get('/', function () {
    $view = view('index');
    $view->greeting = "World3";
    $view->name = 'name3';
    $view->collection = array(1, 2, 3);
    return $view;
});