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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
