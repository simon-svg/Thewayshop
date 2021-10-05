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

// pages
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
Route::get('/admin/header', 'App\Http\Controllers\Admin\HeaderController@header')
->name('admin.header');
Route::get('/admin/header/add', 'App\Http\Controllers\Admin\HeaderController@add')
->name('admin.header.add');
Route::post('/admin/header/insert', 'App\Http\Controllers\Admin\HeaderController@insert')
->name('admin.header.insert');
Route::get('/admin/header/delete/{id}', 'App\Http\Controllers\Admin\HeaderController@delete')
->name('admin.header.delete')->where('id', '[0-9]+');
Route::get('/admin/header/update/{id}', 'App\Http\Controllers\Admin\HeaderController@update')
->name('admin.header.update')->where('id', '[0-9]+');
Route::post('/admin/header/updateForm', 'App\Http\Controllers\Admin\HeaderController@updateForm')
->name('admin.header.updateForm');



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









// product
Route::get('/admin/product', 'App\Http\Controllers\Admin\ProductController@product')
->name('admin.product');
Route::get('/admin/product/add', 'App\Http\Controllers\Admin\ProductController@add')
->name('admin.product.add');
Route::post('/admin/product/insert', 'App\Http\Controllers\Admin\ProductController@insert')
->name('admin.product.insert');