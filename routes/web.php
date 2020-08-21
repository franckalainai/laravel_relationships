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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', function(){
    //factory(\App\User::class, 3)->create();

    /*
    \App\Address::create([
        'user_id' => 1,
        'country' => "Cote d'Ivoire"
    ]);

    \App\Address::create([
        'user_id' => 2,
        'country' => 'Ghana'
    ]);

    \App\Address::create([
        'user_id' => 3,
        'country' => 'France'
    ]);
    */

    $users = \App\User::all();

    return view('users.index', compact('users'));
});
