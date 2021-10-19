<?php

use Illuminate\Support\Facades\Route;

// languages ******************************************************************************
// Route::get('/language/ru', 'App\Http\Controllers\LangController@ru')->name('ru');
// Route::get('/language/en', 'App\Http\Controllers\LangController@en')->name('en');

// pages ******************************************************************************
Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
Route::get('/shop', 'App\Http\Controllers\PagesController@shop')->name('shop');
Route::get('/cart', 'App\Http\Controllers\PagesController@cart')->name('cart');
Route::get('/checkout', 'App\Http\Controllers\PagesController@checkout')->name('checkout');
Route::get('/shopDetail', 'App\Http\Controllers\PagesController@shopDetail')->name('shopDetail');
Route::get('/service', 'App\Http\Controllers\PagesController@service')->name('service');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact')->name('contact');


// localization
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});




// contact insert
Route::post('admin/contact/insert', 'App\Http\Controllers\Admin\ContactController@insert')
    ->name('admin.contact.insert');




Route::middleware('auth')->group(function () {
    // admin pages ************************************************************************
    // header
    Route::resource('header', 'App\Http\Controllers\Admin\header\HeaderController');

    // header categories
    Route::resource('headerCategory', 'App\Http\Controllers\Admin\header\HeaderCatController');

    // header submenus
    Route::resource('submenu', 'App\Http\Controllers\Admin\header\HeaderSubController');

    // home
    Route::resource('home', 'App\Http\Controllers\Admin\HomeController');

    // our team
    Route::resource('team', 'App\Http\Controllers\Admin\TeamController');

    // users
    Route::resource('users', 'App\Http\Controllers\Admin\UserController');



    // contact
    Route::get('admin/contact', 'App\Http\Controllers\Admin\ContactController@contact')
        ->name('admin.contact.view');
    Route::get('admin/contact/delete/{id}', 'App\Http\Controllers\Admin\ContactController@delete')
        ->name('admin.contact.delete')->where('id', '[0-9]+');






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
