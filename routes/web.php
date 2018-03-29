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

Route::get('/', ['as' => 'main', 'uses' => 'ContactController@show']);
Route::post('/', ['as' => 'main', 'uses' => 'ContactController@store']);
Route::get('/about', ['as' => 'about', function () {
    return view('pages.about');
}]);
Route::get('/reviews', ['as' => 'reviews', function () {
    return view('pages.reviews');
}]);
Route::get('/services', ['as' => 'services', function () {
    return view('pages.services');
}]);
Route::get('/portfolio', ['as' => 'portfolio', function () {
    return view('pages.portfolio');
}]);
Route::get('/vacancies', ['as' => 'vacancies', function () {
    return view('pages.vacancies');
}]);
Route::get('/contact', ['as' => 'contact', function () {
    return view('pages.contact');
}]);
Route::get('/thanks', ['as' => 'thanks', function () {
    return view('pages.thanks');
}]);
