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

Route::get('/', 'IndexController@index');
Route::get('contact', 'ContactController@index');
Route::get('privacy', 'IndexController@privacy');
Route::get('cookie', 'IndexController@cookie');
Route::get('work', 'WorkController@index');
Route::get('clients', 'IndexController@clients');
Route::get('portofolio', 'PortofolioController@portofolios');
Route::get('services', 'IndexController@services');
Route::get('team', 'IndexController@team');
// Route::get('terms', 'IndexController@terms');
Route::get('/portofolio-detail/{url_slug}','PortofolioController@portofolio_detail');

Route::post('send-message','ContactController@send_message');
Route::post('send-work','WorkController@send_work');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('locale/{locale}', function($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
  });


Route::get('/storage/thumb/{query}/{file?}', 'ThumbController@index')
    ->where([
        'query' => '[A-Za-z0-9\:\;\-]+',
        'file'  => '[A-Za-z0-9\/\.\-\_]+',
    ])
    ->name('thumb');