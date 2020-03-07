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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', function () {
//    $greeting = 'Hello';   
//    return view('index')->with('greeting', $greeting);
// });


// Route::get('/', function () {
//     $greeting='World1';
//     $name = 'name1';
//     return view('index', compact('greeting', 'name'));
// });

// Route::get('/', function () {
//     return view('index')->with([
//         'greeting'  => 'World2',
//         'name'      => 'name2'
//     ]);
// });

// Route::get('/', function () {
//     $view = view('index');
//     $view->greeting = "World3";
//     $view->name = 'name3';
//     $view->collection = array(1, 2, 3);
//     return $view;
// });

// Route::get('/', 'IndexController@index');

// Route::resource('posts', 'PostsController');

// Route::get('posts', [
//    'as'     => 'posts.index',
//    'uses'   => 'PostsController@index'
// ]);

// Route::resource('posts.comments', 'PostCommentController');

Route::get('auth', function () {
    $credentials = [
        'email'    => 'john@example.com',
        'password' => 'password1'
    ];

    if (! Auth::attempt($credentials)) {
        return 'Incorrect username and password combination';
    }

    return redirect('protected');
});

Route::get('auth/logout', function () {
    Auth::logout();

    return 'See you again~';
});

Route::get('protected', function () {
    if (! Auth::check()) {
        return 'Illegal access !!! Get out of here~';
    }

    return 'Welcome back, ' . Auth::user()->name;
});