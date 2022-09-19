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

Route::get('/', function () {
    return redirect()->route("home");
});

Route::get("home", "IndexController@home")->name("home");
Route::get("nieuws", "IndexController@news")->name("news");
Route::get("acties", "IndexController@actie")->name("actie");
Route::get("groepen/{group}", "GroupController@group")->name("group");
Route::get("kom-kijken/{group?}", "RegisterController@registerView")->name("first_time");
Route::post("kom-kijken/", "RegisterController@registerPost")->name("first_time.post");

Route::group(['prefix' => 'verhuur'], function () {
    Route::get('', 'RentController@building');
    Route::get('gebouw', 'RentController@building')->name('verhuur.building');
    Route::get('omgeving', 'RentController@surrounding')->name('verhuur.surrounding');
    Route::get('prijs-en-voorwaarden', 'RentController@prices_conditions')->name('verhuur.prices');
    Route::get('kalender', 'RentController@calender')->name('verhuur.calender');
    Route::post('kalender', 'RentController@book')->name('verhuur.calender.post');
});

Route::group(['prefix' => 'over-ons'], function () {
    Route::get('', 'AboutController@general');
    Route::get('algemeen', 'AboutController@general')->name('about_us.general');
    Route::get('contact', 'AboutController@contact')->name('about_us.contact');
    Route::get('organisatie-en-bestuur', 'AboutController@register_costs')->name('about_us.register_costs');
});
