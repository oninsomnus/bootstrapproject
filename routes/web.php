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

Route::get('/', 'PagesController@home')->name('home');

Route::get('page/about', 'PagesController@about')->name('about');

Route::get('page/contact', 'PagesController@contact')->name('contact');

Route::get('page/courseSingle', 'PagesController@courseSingle')->name('courseSingle');

Route::get('page/courses', 'PagesController@courses')->name('courses');

Route::get('page/events', 'PagesController@events')->name('events');

Route::get('page/gallery', 'PagesController@gallery')->name('gallery');

Route::get('page/news', 'PagesController@news')->name('news');

Route::get('page/teachers', 'PagesController@teachers')->name('teachers');

Route::get('page/notFound', 'PagesController@notFound')->name('notFound');

Route::resource('messages', 'MessageController');