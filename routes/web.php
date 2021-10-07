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
Route::get('/myAccount', 'App\Http\Controllers\PagesController@myAccount')->name('myAccount');




// admin pages ************************************************************************
// header
Route::get('/admin/header', 'App\Http\Controllers\Admin\header\HeaderController@header')
->name('admin.header');
Route::get('/admin/header/add', 'App\Http\Controllers\Admin\header\HeaderController@add')
->name('admin.header.add');
Route::post('/admin/header/insert', 'App\Http\Controllers\Admin\header\HeaderController@insert')
->name('admin.header.insert');
Route::get('/admin/header/delete/{id}', 'App\Http\Controllers\Admin\header\HeaderController@delete')
->name('admin.header.delete')->where('id', '[0-9]+');
Route::get('/admin/header/update/{id}', 'App\Http\Controllers\Admin\header\HeaderController@update')
->name('admin.header.update')->where('id', '[0-9]+');
Route::post('/admin/header/updateForm', 'App\Http\Controllers\Admin\header\HeaderController@updateForm')
->name('admin.header.updateForm');




// header categories
Route::get('/admin/header/cat', 'App\Http\Controllers\Admin\header\HeaderCatController@headerCat')
->name('admin.header.cat');
Route::get('/admin/header/cat/add', 'App\Http\Controllers\Admin\header\HeaderCatController@add')
->name('admin.header.cat.add');
Route::post('/admin/header/cat/insert', 'App\Http\Controllers\Admin\header\HeaderCatController@insert')
->name('admin.header.cat.insert');
Route::get('/admin/header/cat/delete/{id}', 'App\Http\Controllers\Admin\header\HeaderCatController@delete')
->name('admin.header.cat.delete')->where('id', '[0-9]+');
Route::get('/admin/header/cat/update/{id}', 'App\Http\Controllers\Admin\header\HeaderCatController@update')
->name('admin.header.cat.update')->where('id', '[0-9]+');
Route::post('/admin/header/cat/updateForm', 'App\Http\Controllers\Admin\header\HeaderCatController@updateForm')
->name('admin.header.cat.updateForm');




// header submenus
Route::get('/admin/header/submenu', 'App\Http\Controllers\Admin\header\HeaderSubController@headerSub')
->name('admin.header.sub');
Route::get('/admin/header/submenu/add', 'App\Http\Controllers\Admin\header\HeaderSubController@add')
->name('admin.header.sub.add');
Route::post('/admin/header/sub/insert', 'App\Http\Controllers\Admin\header\HeaderSubController@insert')
->name('admin.header.sub.insert');
Route::get('/admin/header/sub/delete/{id}', 'App\Http\Controllers\Admin\header\HeaderSubController@delete')
->name('admin.header.sub.delete')->where('id', '[0-9]+');
Route::get('/admin/header/sub/update/{id}', 'App\Http\Controllers\Admin\header\HeaderSubController@update')
->name('admin.header.sub.update')->where('id', '[0-9]+');
Route::post('/admin/header/sub/updateForm', 'App\Http\Controllers\Admin\header\HeaderSubController@updateForm')
->name('admin.header.sub.updateForm');





// home
Route::get('/admin/home', 'App\Http\Controllers\Admin\HomeController@home')
->name('admin.home');
Route::get('/admin/home/add', 'App\Http\Controllers\Admin\HomeController@add')
->name('admin.home.add');
Route::post('/admin/home/insert', 'App\Http\Controllers\Admin\HomeController@insert')
->name('admin.home.insert');
Route::get('/admin/home/delete/{id}/{name}', 'App\Http\Controllers\Admin\HomeController@delete')
->name('admin.home.delete')->where('id', '[0-9]+');
Route::get('/admin/home/update/{id}', 'App\Http\Controllers\Admin\HomeController@update')
->name('admin.home.update')->where('id', '[0-9]+');
Route::post('/admin/home/updateForm', 'App\Http\Controllers\Admin\HomeController@updateForm')
->name('admin.home.updateForm');







// our team
Route::get('/admin/team', 'App\Http\Controllers\Admin\TeamController@team')
->name('admin.team');
Route::get('/admin/team/add', 'App\Http\Controllers\Admin\TeamController@add')
->name('admin.team.add');
Route::post('/admin/team/insert', 'App\Http\Controllers\Admin\TeamController@insert')
->name('admin.team.insert');
Route::get('/admin/team/delete/{id}/{name}', 'App\Http\Controllers\Admin\TeamController@delete')
->name('admin.team.delete')->where('id', '[0-9]+');
Route::get('/admin/team/update/{id}', 'App\Http\Controllers\Admin\TeamController@update')
->name('admin.team.update')->where('id', '[0-9]+');
Route::post('/admin/team/updateForm', 'App\Http\Controllers\Admin\TeamController@updateForm')
->name('admin.team.updateForm');







// contact
Route::get('/admin/contact', 'App\Http\Controllers\Admin\ContactController@contact')
->name('admin.contact');
Route::post('/admin/contact/insert', 'App\Http\Controllers\Admin\ContactController@insert')
->name('admin.contact.insert');
Route::get('/admin/contact/delete/{id}', 'App\Http\Controllers\Admin\ContactController@delete')
->name('admin.contact.delete')->where('id', '[0-9]+');
Route::get('/admin/contact/update/{id}', 'App\Http\Controllers\Admin\ContactController@update')
->name('admin.contact.update')->where('id', '[0-9]+');
Route::post('/admin/contact/updateForm', 'App\Http\Controllers\Admin\ContactController@updateForm')
->name('admin.contact.updateForm');











// product
Route::get('/admin/product', 'App\Http\Controllers\Admin\ProductController@product')
->name('admin.product');
Route::get('/admin/product/add', 'App\Http\Controllers\Admin\ProductController@add')
->name('admin.product.add');
Route::post('/admin/product/insert', 'App\Http\Controllers\Admin\ProductController@insert')
->name('admin.product.insert');





// product size
// Route::get('/admin/product/size', 'App\Http\Controllers\Admin\ProductSizeController@productSize')
// ->name('admin.product.size');
// Route::get('/admin/product/add', 'App\Http\Controllers\Admin\ProductController@add')
// ->name('admin.product.add');
// Route::post('/admin/product/insert', 'App\Http\Controllers\Admin\ProductController@insert')
// ->name('admin.product.insert');