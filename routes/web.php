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
//    $data = ['name' => Auth::user()->getAuthIdentifier()];
//    return view('home',['data' => isset($data) ? $data : null]);
    return view('welcome');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('home/showwelcome', function (){
    return (new App\Http\Controllers\HomeController())->showwelcome();
});

Route::get('home/showdetail/{name}/{email}','HomeController@showdetails');
Route::get('/about','PagesControllers@about');
Route::get('/contact','PagesControllers@contact');
