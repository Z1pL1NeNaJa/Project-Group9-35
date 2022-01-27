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


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'welcome@promotion')->name('/');
Route::get('/about', 'about@showproduct')->name('about');

Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Auth::routes();






Route::middleware(['auth', 'verifyisadmin'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    //route Dashboard
    Route::get('/index', 'Admin\AdminController@index')->name('index');

    //route admin
    Route::get('/adminfrom', 'Admin\AdminindexController@showadmin')->name('adminfrom');
    Route::get('/adddataadmin', 'Admin\AdminindexController@showaddadmin')->name('adddataadmin');
    // Route::post('/adminfrom/create', 'Admin\AdminindexController@create')->name('create.a');
    Route::get('/adminfrom/edit/{id}', 'Admin\AdminindexController@edit');
    Route::post('/adminfrom/update/{id}', 'Admin\AdminindexController@update');
    Route::get('/adminfrom/delete/{id}', 'Admin\AdminindexController@delete');

    //route Background
    Route::get('/Backgroundfrom', 'Admin\BackgroundController@showBackground')->name('Backgroundfrom');
    Route::get('/adddataadminb', 'Admin\BackgroundController@showaddadminb')->name('adddataadminb');
    Route::post('/Backgroundfrom/create', 'Admin\BackgroundController@create')->name('create.b');
    Route::get('/Backgroundfrom/edit/{id}', 'Admin\BackgroundController@edit');
    Route::post('/Backgroundfrom/update/{id}', 'Admin\BackgroundController@update');
    Route::get('/Backgroundfrom/delete/{id}', 'Admin\BackgroundController@delete');

    //route TypeProduct
    Route::get('/TypeProductfrom', 'Admin\TypeProductController@showTypeProduct')->name('TypeProductfrom');
    Route::get('/adddataadmint', 'Admin\TypeProductController@showaddadmint')->name('adddataadmint');
    Route::post('/TypeProductfrom/create', 'Admin\TypeProductController@create')->name('create.t');
    Route::get('/TypeProductfrom/edit/{id}', 'Admin\TypeProductController@edit');
    Route::post('/TypeProductfrom/update/{id}', 'Admin\TypeProductController@update');
    Route::get('/TypeProductfrom/delete/{id}', 'Admin\TypeProductController@delete');

    //route Product
    Route::get('/productfrom', 'Admin\ProductController@showproduct')->name('productfrom');
    Route::get('/adddataadminp', 'Admin\ProductController@showaddadminp')->name('adddataadminp');
    Route::post('/productfrom/create', 'Admin\ProductController@create')->name('product.c');
    Route::get('/productfrom/edit/{id}', 'Admin\ProductController@edit');
    Route::post('/productfrom/update/{id}', 'Admin\ProductController@update');
    Route::get('/productfrom/delete/{id}', 'Admin\ProductController@delete');

    //route Contents
    Route::get('/contentsfrom', 'Admin\contentsController@showcontents')->name('contentsfrom');
    Route::get('/adddataadminc', 'Admin\contentsController@showaddadmin')->name('adddataadminc');
    Route::post('/contentsfrom/create', 'Admin\contentsController@create')->name('contents.c');
    Route::get('/contentsfrom/edit/{id}', 'Admin\contentsController@edit');
    Route::post('/contentsfrom/update/{id}', 'Admin\contentsController@update');
    Route::get('/contentsfrom/delete/{id}', 'Admin\contentsController@delete');



    //route Homepagefrom
    Route::get('/homepagefrom', 'Admin\HomepageController@showhomepage')->name('homepagefrom');
    Route::get('/adddataadminh', 'Admin\HomepageController@showaddadmin')->name('adddataadminh');
    Route::post('/homepagefrom/create', 'Admin\HomepageController@create')->name('homepage.c');
    Route::get('/homepagefrom/edit/{id}', 'Admin\HomepageController@edit');
    Route::post('/homepagefrom/update/{id}', 'Admin\HomepageController@update');
    Route::get('/homepagefrom/delete/{id}', 'Admin\HomepageController@delete');
    //------------------------------------------------------------------------------------------------------------------------------------






});
