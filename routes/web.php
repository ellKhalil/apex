<?php

use App\Models\Post;
use GuzzleHttp\Psr7\Request;
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
    return view('welcome');
});

Route::get('/', function () {
    return view('binary/pages/home');
});

Route::get('/about', function () {
    return view('binary/pages/about');
});

Route::get('/services', function () {
    return view('binary/pages/services');
});

Route::get('/contact', function () {
    return view('binary/pages/contact');
});

Route::get('/onePage', function () {
    return view('binary/pages/onePage');
});

Route::get('/register', 'App\Http\Controllers\PostsController@index');
Route::post('/register', 'App\Http\Controllers\PostsController@store');
Route::get('/ignition', 'App\Http\Controllers\tableController@index');

Route::get ( '/welcome', function () {
    return view ( 'welcome' );
} );