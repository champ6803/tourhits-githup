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

Route::get('/', 'HomeController@index');

Route::get('register', 'RegisterController@index');

Route::post('register', 'RegisterController@register');

Route::get('login', 'LoginController@index');

Route::post('login', 'LoginController@login');

Route::post('getDistrict', 'MasterController@getDistrict');

Route::post('getSubdistrict', 'MasterController@getSubdistrict');

Route::get('search-tour/{country_id}', 'FilterController@search_tour');

//Route::get('adminlogin','LoginController@adminLogin');

Route::get('dashboard', 'DashboardController@dashboard');

Route::get('tour-detail/{tour_country}/{tour_pakage_id}/{tour_package_name}', 'TourController@tour_detail');

Route::get('manage-route', 'AdminController@manage_route');

Route::post('searchRoute', 'AdminController@searchRoute');

Route::post('saveRoute', 'AdminController@saveRoute');

Route::post('deleteRoute', 'AdminController@deleteRoute');

Route::post('updateRoute', 'AdminController@updateRoute');

Route::get('manage-airline', 'AdminController@manage_airline');

Route::post('searchAirline', 'AdminController@searchAirline');

Route::post('saveAirline', 'AdminController@saveAirline');

Route::post('deleteAirline', 'AdminController@deleteAirline');

Route::post('updateAirline', 'AdminController@updateAirline');

Route::get('manage-attraction', 'AdminController@manage_attraction');

Route::post('searchAttraction', 'AdminController@searchAttraction');

Route::post('saveAttraction', 'AdminController@saveAttraction');

Route::post('deleteAttraction', 'AdminController@deleteAttraction');

Route::post('updateAttraction', 'AdminController@updateAttraction');

Route::get('manage-tag', 'AdminController@manage_tag');

Route::post('searchTag', 'AdminController@searchTag');

Route::post('saveTag', 'AdminController@saveTag');

Route::post('deleteTag', 'AdminController@deleteTag');

Route::post('updateTag', 'AdminController@updateTag');

Route::get('manage-holiday', 'AdminController@manage_holiday');

Route::post('searchHoliday', 'AdminController@searchHoliday');

Route::post('saveHoliday', 'AdminController@saveHoliday');

Route::post('deleteHoliday', 'AdminController@deleteHoliday');

Route::post('updateHoliday', 'AdminController@updateHoliday');

Route::get('manage-othertag', 'AdminController@manage_othertag');

Route::post('searchOther', 'AdminController@searchOther');

Route::post('saveOther', 'AdminController@saveOther');

Route::post('deleteOther', 'AdminController@deleteOther');

Route::post('updateOther', 'AdminController@updateOther');

Route::get('manage-category', 'AdminController@manage_category');

Route::post('searchTourCategory', 'AdminController@searchTourCategory');

Route::post('saveTourCategory', 'AdminController@saveTourCategory');

Route::post('deleteTourCategory', 'AdminController@deleteTourCategory');

Route::post('updateTourCategory', 'AdminController@updateTourCategory');

Route::post('search-tour/getTourPackage', 'FilterController@getTourPackage');

Route::post('getTourPackage', 'FilterController@getTourPackage');

Route::get('about', 'AboutController@about_us');

Route::get('tour-confirm/{tour_pakage_id}/{tour_period_id}', 'TourController@tour_confirm');

Route::get('contact', 'ContactController@contact_us');

Route::get('hothits', 'HothitsController@hot_hits');

Route::get('logout', 'LoginController@logout');

Route::get('manage-front-country', 'ManageFrontController@manage_front_country');

Route::post('searchAllCountry', 'ManageFrontController@searchAllCountry');

Route::post('searchTourCountry', 'ManageFrontController@searchTourCountry');

Route::post('saveTourCountry', 'ManageFrontController@saveTourCountry');

Route::post('deleteTourCountry', 'ManageFrontController@deleteTourCountry');

Route::post('updateTourCountry', 'ManageFrontController@updateTourCountry');

Route::get('admin', 'AdminLoginController@login_admin');

Route::get('loading', 'LoadingScreenController@loading_screen');

Route::get('profile', 'ManageFrontController@profile');

Route::post('searchCompanyByCompanyCode', 'ManageFrontController@searchCompanyByCompanyCode');

Route::get('tourhot', 'TourhotController@tour_hot');

Route::post('orders', 'TourController@orders');

Route::get('tourhot','TourhotController@tour_hot');

Route::get('manage-tourlist','AdminController@manage_tourlist');

Route::post('searchAllTourCountry', 'AdminController@searchAllTourCountry');

Route::post('searchAllTourCategory', 'AdminController@searchAllTourCategory');

Route::post('saveTourlistAndDay', 'AdminController@saveTourlistAndDay');

Route::post('searchAllCategory', 'AdminController@searchAllCategory');

Route::post('searchAllHoliday', 'AdminController@searchAllHoliday');

Route::get('order-list', 'DashboardController@order_list');

Route::post('searchAllAttraction', 'AdminController@searchAllAttraction');

Route::post('searchAllTag', 'AdminController@searchAllTag');

<<<<<<< HEAD
Route::post('searchAllTag', 'AdminController@searchAllTag');
=======
Route::post('searchAllTag', 'AdminController@searchAllTag');

Route::get('tour-detail2', 'TourDetailController@tour_detail2');
>>>>>>> 6fd6ef28a00ad5dd2ca6eed53098d9a7bb29de1d
