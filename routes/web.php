<?php


Route::get('/', function () {
  
	$blogs = App\Blog::latest()->paginate(6);

    return view('welcome', compact('blogs'));
 });
Route::get('/blog/{id}','BlogController');
 
 Route::get('/about', 'PagesController@about');
 Route::get('/contact', 'PagesController@contact');
 
Route::resource('home/blog', 'BlogController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');