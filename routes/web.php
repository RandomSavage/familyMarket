<?php

use Illuminate\Support\Facades\Route;
use App\GeneralSetting;
use App\SocialSetting;
use App\SeoSetting;

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
//static pages
// Route::get('/', 'StaticPagesController@home');



Route::get('/', function () {
    return view('welcome');
});

//static pages
Route::get('/', 'StaticPagesController@home');

Route::get('/about', 'StaticPagesController@about');

Route::get('/reservations', 'StaticPagesController@reservations');

Route::post('/reservations', 'StaticPagesController@saveReservation');

Route::get('/reservations/thank-you', 'StaticPagesController@thankyou');

Route::get('/contact', 'StaticPagesController@contact');

Route::get('/offers', 'StaticPagesController@offers');

Route::post('/offers', 'StaticPagesController@registerMember');

Route::get('/offers/thank-you', 'StaticPagesController@thankYou');

Route::get('/menu', 'StaticPagesController@menu');

Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');

Route::get('/inventory/{slug}', 'StaticPagesController@singleCategory');

//Contact-form
Route::get('/contact-form', 'ContactFormController@create');

Route::post('/contact-form', 'ContactFormController@store');

//Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');

//Admin General Categories
Route::get('/admin/general-categories', 'admin\GeneralCategoriesController@index');

Route::get('/admin/general-categories/create', 'admin\GeneralCategoriesController@create');

Route::post('/admin/general-categories', 'admin\GeneralCategoriesController@store');

Route::get('/admin/general-categories/{id}/edit', 'admin\GeneralCategoriesController@edit');

Route::put('/admin/general-categories/{id}', 'admin\GeneralCategoriesController@update');

Route::delete('/admin/general-categories/{id}/delete', 'admin\GeneralCategoriesController@delete');

//Admin General Items
Route::get('/admin/general-items', 'admin\GeneralItemsController@index');

Route::get('/admin/general-items/create', 'admin\GeneralItemsController@create');

Route::post('/admin/general-items', 'admin\GeneralItemsController@store');

Route::get('/admin/general-items/{id}/edit', 'admin\GeneralItemsController@edit');

Route::put('/admin/general-items/{id}', 'admin\GeneralItemsController@update');

Route::delete('/admin/general-items/{id}/delete', 'admin\GeneralItemsController@delete');

// Admin Users
Route::get('/admin/users', 'admin\UsersController@index');

Route::get('/admin/users/create', 'admin\UsersController@create');

Route::post('/admin/users', 'admin\UsersController@store');

Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');

Route::put('/admin/users/{id}', 'admin\UsersController@update');

Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

View::composer(['pages/contact','inventory.single-category'], function ($view) {
    $generalSettings = GeneralSetting::find(1);
    $socialSettings = SocialSetting::find(1);
    $seoSettings = SeoSetting::find(1);


    $view->with('settings', [
        "general" => $generalSettings,
        "social" => $socialSettings,
        "seo" => $seoSettings
    ]);
});
