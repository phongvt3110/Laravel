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

Route::get('/welcome', function () {
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

// backend routes
Route::get('/backend', 'Backend\BackendController@index');
Route::get('/backend/basic-table', 'Backend\BackendController@basic_table');
Route::get('/backend/blank', 'Backend\BackendController@blank');
Route::get('/backend/buttons', 'Backend\BackendController@buttons');
Route::get('/backend/chart-chartjs', 'Backend\BackendController@chart_chartjs');
Route::get('/backend/404', 'Backend\BackendController@error404');
Route::get('/backend/form-component', 'Backend\BackendController@form_component');
Route::get('/backend/form-validation', 'Backend\BackendController@form_validation');
Route::get('/backend/general', 'Backend\BackendController@general');
Route::get('/backend/grids', 'Backend\BackendController@grids');
Route::get('/backend/login', 'Backend\BackendController@login');
Route::get('/backend/profile', 'Backend\BackendController@profile');
Route::get('/backend/widgets', 'Backend\BackendController@widgets');

// admin routes
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/admin/dashboard', 'Admin\AdminController@index2');



// frontend routes
Route::get('/', 'Frontend\FrontendController@index');
Route::get('/frontend/blog', 'Frontend\FrontendController@blog');
Route::get('/frontend/blog_single', 'Frontend\FrontendController@blog_single');
Route::get('/frontend/cart', 'Frontend\FrontendController@cart');
Route::get('/frontend/checkout', 'Frontend\FrontendController@checkout');
Route::get('/frontend/contact_us', 'Frontend\FrontendController@contact_us');
Route::get('/frontend/error404', 'Frontend\FrontendController@error404');
Route::get('/frontend/login', 'Frontend\FrontendController@login');
Route::get('/frontend/product_details', 'Frontend\FrontendController@product_details');
Route::get('/frontend/shop', 'Frontend\FrontendController@shop');


Route::get('/test', 'Frontend\FrontendController@test');
