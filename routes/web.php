<?php

use Illuminate\Support\Facades\Route;

// pages ******************************************************************************
Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
Route::get('/shop', 'App\Http\Controllers\PagesController@shop')->name('shop');
Route::get('/cart', 'App\Http\Controllers\PagesController@cart')->name('cart');
Route::get('/checkout', 'App\Http\Controllers\PagesController@checkout')->name('checkout');
Route::get('/shopDetail', 'App\Http\Controllers\PagesController@shopDetail')->name('shopDetail');
Route::get('/service', 'App\Http\Controllers\PagesController@service')->name('service');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact')->name('contact');
Route::get('/registration', 'App\Http\Controllers\PagesController@registration')->name('registration');
Route::get('/login', 'App\Http\Controllers\PagesController@login')->name('login');
Route::get('/myAccount', 'App\Http\Controllers\PagesController@myAccount')->name('myAccount');




// admin pages ************************************************************************
// header
Route::name('admin.header.')->group(function () {
    Route::get('/admin/header', 'App\Http\Controllers\Admin\header\HeaderController@header')
    ->name('view');
    Route::get('/admin/header/add', 'App\Http\Controllers\Admin\header\HeaderController@add')
    ->name('add');
    Route::post('/admin/header/insert', 'App\Http\Controllers\Admin\header\HeaderController@insert')
    ->name('insert');
    Route::get('/admin/header/delete/{id}', 'App\Http\Controllers\Admin\header\HeaderController@delete')
    ->name('delete')->where('id', '[0-9]+');
    Route::get('/admin/header/update/{id}', 'App\Http\Controllers\Admin\header\HeaderController@update')
    ->name('update')->where('id', '[0-9]+');
    Route::post('/admin/header/updateForm', 'App\Http\Controllers\Admin\header\HeaderController@updateForm')
    ->name('updateForm');
});




// header categories
Route::name('admin.header.cat.')->group(function () {
    Route::get('/admin/header/cat', 'App\Http\Controllers\Admin\header\HeaderCatController@headerCat')
    ->name('view');
    Route::get('/admin/header/cat/add', 'App\Http\Controllers\Admin\header\HeaderCatController@add')
    ->name('add');
    Route::post('/admin/header/cat/insert', 'App\Http\Controllers\Admin\header\HeaderCatController@insert')
    ->name('insert');
    Route::get('/admin/header/cat/delete/{id}', 'App\Http\Controllers\Admin\header\HeaderCatController@delete')
    ->name('delete')->where('id', '[0-9]+');
    Route::get('/admin/header/cat/update/{id}', 'App\Http\Controllers\Admin\header\HeaderCatController@update')
    ->name('update')->where('id', '[0-9]+');
    Route::post('/admin/header/cat/updateForm', 'App\Http\Controllers\Admin\header\HeaderCatController@updateForm')
    ->name('updateForm');
});




// header submenus
Route::name('admin.header.sub.')->group(function () {
    Route::get('/admin/header/submenu', 'App\Http\Controllers\Admin\header\HeaderSubController@headerSub')
    ->name('view');
    Route::get('/admin/header/submenu/add', 'App\Http\Controllers\Admin\header\HeaderSubController@add')
    ->name('add');
    Route::post('/admin/header/sub/insert', 'App\Http\Controllers\Admin\header\HeaderSubController@insert')
    ->name('insert');
    Route::get('/admin/header/sub/delete/{id}', 'App\Http\Controllers\Admin\header\HeaderSubController@delete')
    ->name('delete')->where('id', '[0-9]+');
    Route::get('/admin/header/sub/update/{id}', 'App\Http\Controllers\Admin\header\HeaderSubController@update')
    ->name('update')->where('id', '[0-9]+');
    Route::post('/admin/header/sub/updateForm', 'App\Http\Controllers\Admin\header\HeaderSubController@updateForm')
    ->name('updateForm');
});





// home
Route::name('admin.home.')->group(function () {
    Route::get('/admin/home', 'App\Http\Controllers\Admin\HomeController@home')
    ->name('view');
    Route::get('/admin/home/add', 'App\Http\Controllers\Admin\HomeController@add')
    ->name('add');
    Route::post('/admin/home/insert', 'App\Http\Controllers\Admin\HomeController@insert')
    ->name('insert');
    Route::get('/admin/home/delete/{id}/{name}', 'App\Http\Controllers\Admin\HomeController@delete')
    ->name('delete')->where('id', '[0-9]+');
    Route::get('/admin/home/update/{id}', 'App\Http\Controllers\Admin\HomeController@update')
    ->name('update')->where('id', '[0-9]+');
    Route::post('/admin/home/updateForm', 'App\Http\Controllers\Admin\HomeController@updateForm')
    ->name('updateForm');
});







// our team
Route::name('admin.team.')->group(function () {
    Route::get('/admin/team', 'App\Http\Controllers\Admin\TeamController@team')
    ->name('view');
    Route::get('/admin/team/add', 'App\Http\Controllers\Admin\TeamController@add')
    ->name('add');
    Route::post('/admin/team/insert', 'App\Http\Controllers\Admin\TeamController@insert')
    ->name('insert');
    Route::get('/admin/team/delete/{id}/{name}', 'App\Http\Controllers\Admin\TeamController@delete')
    ->name('delete')->where('id', '[0-9]+');
    Route::get('/admin/team/update/{id}', 'App\Http\Controllers\Admin\TeamController@update')
    ->name('update')->where('id', '[0-9]+');
    Route::post('/admin/team/updateForm', 'App\Http\Controllers\Admin\TeamController@updateForm')
    ->name('updateForm');
});







// contact
Route::name('admin.contact.')->group(function () {
    Route::get('/admin/contact', 'App\Http\Controllers\Admin\ContactController@contact')
    ->name('view');
    Route::post('/admin/contact/insert', 'App\Http\Controllers\Admin\ContactController@insert')
    ->name('insert');
    Route::get('/admin/contact/delete/{id}', 'App\Http\Controllers\Admin\ContactController@delete')
    ->name('delete')->where('id', '[0-9]+');
    Route::get('/admin/contact/update/{id}', 'App\Http\Controllers\Admin\ContactController@update')
    ->name('update')->where('id', '[0-9]+');
    Route::post('/admin/contact/updateForm', 'App\Http\Controllers\Admin\ContactController@updateForm')
    ->name('updateForm');
});










// product
Route::name('admin.product.')->group(function () {
    Route::get('/admin/product', 'App\Http\Controllers\Admin\ProductController@product')
    ->name('view');
    Route::get('/admin/product/add', 'App\Http\Controllers\Admin\ProductController@add')
    ->name('add');
    Route::post('/admin/product/insert', 'App\Http\Controllers\Admin\ProductController@insert')
    ->name('insert');
});





// product size
// Route::name('admin.product.size.')->group(function () {
//     Route::get('/admin/product/size', 'App\Http\Controllers\Admin\ProductSizeController@productSize')
//     ->name('view');
//     Route::get('/admin/product/add', 'App\Http\Controllers\Admin\ProductController@add')
//     ->name('add');
//     Route::post('/admin/product/insert', 'App\Http\Controllers\Admin\ProductController@insert')
//     ->name('insert');
// });