<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::group( ['middleware' => 'auth' ], function()
{

Route::get('/', 'HomeController@index');


Route::get('/movie-single/{id}','HomeController@videopage');
Route::get('/show-single/{id}','HomeController@showvideo');
Route::get('/episodevideo/{id}','HomeController@episodevideo');
Route::get('/movie-category', 'HomeController@movies');
Route::get('/setting', 'HomeController@setting');
Route::get('/setting-edit','HomeController@setting_edit');
Route::post('/setting-update','HomeController@setting_update');
Route::get('/search-result','HomeController@search_result');


Route::get('/show-category', 'HomeController@shows' );

Route::get('/about-us', function () {
    return view('pages.about');
});


Route::get('/faq', function () {
    return view('pages.faq');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
});

Route::get('/pricing-plan', function () {
    return view('pages.pricing');
});

/////// backend ///////

Route::get('/index', 'DashboardController@index');

Route::resource('/rating','RateController');

Route::resource('/comment','CommentController');

Route::resource('/user','UserController');
Route::get('/manage_profile','UserController@manage_profile');
Route::post('/profile_update/{id}','UserController@profile_update');
Route::resource('/category','CategoryController');

Route::resource('/movie','MovieController');

Route::get('/moviebanner', 'MovieController@moviebanner');
Route::get('/showbanner', 'ShowController@showbanner');
Route::post('/moviebannerstr','MovieController@moviebannerstr');
Route::post('/showbannerstr','ShowController@showbannerstr');
Route::post('/moviebannerupd/{id}','MovieController@moviebannerupd');
Route::post('/showbannerupd/{id}','ShowController@showbannerupd');
Route::get('/addmbanner', 'MovieController@bannercreate');
Route::get('/addsbanner', 'ShowController@showbannercreate');
Route::get('/edit-mbanner/{id}', 'MovieController@editmbanner');
Route::get('/edit-sbanner/{id}', 'ShowController@editsbanner');

Route::resource('/show','ShowController');

Route::resource('/episode','EpisodeController');

Route::resource('/pages-pricing','PricePlanController');







});