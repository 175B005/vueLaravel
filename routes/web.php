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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/twiite', function () {
    return view('index', ['twiite' => App\Twiite::all(), 'tags' => App\Tag::all()]);
});

Route::post('/twiite', function () {
    $twiite = new App\Twiite();
    $twiite->contents = request()->contents;
    $twiite->save();
//dd(request()->tags);
    $twiite->tags()->attach(request()->tags);

    return redirect('/twiite');
});
