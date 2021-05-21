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
    echo "<h2>This is Home page</h2>";
});

Route::get('/about', function () {
    echo "<h2>This is About page</h2>";
});

Route::get('/contact', function () {
    echo "<h2>This is Contact page</h2>";
});
// tao router co truyen tham so
Route::get('/user', function () {
    return view('user', ['name'=>'Masud Alam']);
});
//truyen tham so tren thanh dia chi
Route::get('/user/{name}', function ($name) {
    echo "<h2>User name is $name</h2>";
});
// truyen tham so mac dinh trong route
Route::get('/user-name/{name?}', function ($name = 'Sohel') {
    echo "<h2>User name is $name</h2>";
});
// router goi toi controller
Route::get('/', 'App\Http\Controllers\HomeController@index');
