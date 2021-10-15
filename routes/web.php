<?php

use Illuminate\Support\Facades\Route;


// languages ******************************************************************************
Route::get('/language/ru', 'App\Http\Controllers\LangController@ru')->name('ru');
Route::get('/language/en', 'App\Http\Controllers\LangController@en')->name('en');






// pages ******************************************************************************
Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
Route::get('/shop', 'App\Http\Controllers\PagesController@shop')->name('shop');
Route::get('/cart', 'App\Http\Controllers\PagesController@cart')->name('cart');
Route::get('/checkout', 'App\Http\Controllers\PagesController@checkout')->name('checkout');
Route::get('/shopDetail', 'App\Http\Controllers\PagesController@shopDetail')->name('shopDetail');
Route::get('/service', 'App\Http\Controllers\PagesController@service')->name('service');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact')->name('contact');


Route::middleware('auth')->group(function () {
    // admin pages ************************************************************************
    // header
    Route::prefix('admin/header')->group(function () {
        Route::name('admin.header.')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\header\HeaderController@header')
                ->name('view');
            Route::get('/add', 'App\Http\Controllers\Admin\header\HeaderController@add')
                ->name('add');
            Route::post('/insert', 'App\Http\Controllers\Admin\header\HeaderController@insert')
                ->name('insert');
            Route::get('/delete/{id}', 'App\Http\Controllers\Admin\header\HeaderController@delete')
                ->name('delete')->where('id', '[0-9]+');
            Route::get('/update/{id}', 'App\Http\Controllers\Admin\header\HeaderController@update')
                ->name('update')->where('id', '[0-9]+');
            Route::post('/updateForm', 'App\Http\Controllers\Admin\header\HeaderController@updateForm')
                ->name('updateForm');
        });
    });



    


    // header categories
    Route::prefix('admin/header')->group(function () {
        Route::name('admin.header.cat.')->group(function () {
            Route::get('/cat', 'App\Http\Controllers\Admin\header\HeaderCatController@headerCat')
                ->name('view');
            Route::get('/cat/add', 'App\Http\Controllers\Admin\header\HeaderCatController@add')
                ->name('add');
            Route::post('/cat/insert', 'App\Http\Controllers\Admin\header\HeaderCatController@insert')
                ->name('insert');
            Route::get('/cat/delete/{id}', 'App\Http\Controllers\Admin\header\HeaderCatController@delete')
                ->name('delete')->where('id', '[0-9]+');
            Route::get('/cat/update/{id}', 'App\Http\Controllers\Admin\header\HeaderCatController@update')
                ->name('update')->where('id', '[0-9]+');
            Route::post('/cat/updateForm', 'App\Http\Controllers\Admin\header\HeaderCatController@updateForm')
                ->name('updateForm');
        });
    });








    // header submenus
    Route::resource('submenu', 'App\Http\Controllers\Admin\header\HeaderSubController');







    // home
    Route::prefix('admin/home')->group(function () {
        Route::name('admin.home.')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\HomeController@home')
                ->name('view');
            Route::get('/add', 'App\Http\Controllers\Admin\HomeController@add')
                ->name('add');
            Route::post('/insert', 'App\Http\Controllers\Admin\HomeController@insert')
                ->name('insert');
            Route::get('/delete/{id}/{name}', 'App\Http\Controllers\Admin\HomeController@delete')
                ->name('delete')->where('id', '[0-9]+');
            Route::get('/update/{id}', 'App\Http\Controllers\Admin\HomeController@update')
                ->name('update')->where('id', '[0-9]+');
            Route::post('/updateForm', 'App\Http\Controllers\Admin\HomeController@updateForm')
                ->name('updateForm');
        });
    });







    // our team
    Route::prefix('admin/team')->group(function () {
        Route::name('admin.team.')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\TeamController@team')
                ->name('view');
            Route::get('/add', 'App\Http\Controllers\Admin\TeamController@add')
                ->name('add');
            Route::post('/insert', 'App\Http\Controllers\Admin\TeamController@insert')
                ->name('insert');
            Route::get('/delete/{id}/{name}', 'App\Http\Controllers\Admin\TeamController@delete')
                ->name('delete')->where('id', '[0-9]+');
            Route::get('/update/{id}', 'App\Http\Controllers\Admin\TeamController@update')
                ->name('update')->where('id', '[0-9]+');
            Route::post('/updateForm', 'App\Http\Controllers\Admin\TeamController@updateForm')
                ->name('updateForm');
        });
    });







    // contact
    Route::prefix('admin/contact')->group(function () {
        Route::name('admin.contact.')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\ContactController@contact')
                ->name('view');
            Route::post('/insert', 'App\Http\Controllers\Admin\ContactController@insert')
                ->name('insert');
            Route::get('/delete/{id}', 'App\Http\Controllers\Admin\ContactController@delete')
                ->name('delete')->where('id', '[0-9]+');
            Route::get('/update/{id}', 'App\Http\Controllers\Admin\ContactController@update')
                ->name('update')->where('id', '[0-9]+');
            Route::post('/updateForm', 'App\Http\Controllers\Admin\ContactController@updateForm')
                ->name('updateForm');
        });
    });








    // our team
    Route::prefix('admin/users')->group(function () {
        Route::name('admin.users.')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\UserController@user')
                ->name('view');
            Route::get('/add', 'App\Http\Controllers\Admin\UserController@add')
                ->name('add');
            Route::post('/insert', 'App\Http\Controllers\Admin\UserController@insert')
                ->name('insert');
            Route::get('/delete/{id}', 'App\Http\Controllers\Admin\UserController@delete')
                ->name('delete')->where('id', '[0-9]+');
            Route::get('/update/{id}', 'App\Http\Controllers\Admin\UserController@update')
                ->name('update')->where('id', '[0-9]+');
            Route::post('/updateForm', 'App\Http\Controllers\Admin\UserController@updateForm')
                ->name('updateForm');
        });
    });










    // product
    Route::prefix('admin/product')->group(function () {
        Route::name('admin.product.')->group(function () {
            Route::get('/', 'App\Http\Controllers\Admin\ProductController@product')
                ->name('view');
            Route::get('/add', 'App\Http\Controllers\Admin\ProductController@add')
                ->name('add');
            Route::post('/insert', 'App\Http\Controllers\Admin\ProductController@insert')
                ->name('insert');
        });
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








    // registration
    Route::get('/myAccount', 'App\Http\Controllers\PagesController@myAccount')->name('myAccount');
    Route::get('logout', 'App\Http\Controllers\Admin\AuthController@logout')
        ->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/registration', 'App\Http\Controllers\PagesController@registration')->name('registration');
    Route::get('/login', 'App\Http\Controllers\PagesController@login')->name('login');

    Route::post('registration/process', 'App\Http\Controllers\Admin\AuthController@registration')
        ->name('registration.process');
    Route::post('login', 'App\Http\Controllers\Admin\AuthController@login')
        ->name('login.process');
});