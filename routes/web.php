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
Route::get('/home', function(){
	return redirect('/dashboard/home');
});
Route::get('/', function () {
	return view('index');

});
Route::get('/about-us', function () {
	return view('about-us');

});
Route::get('/pets', function () {
	return view('pets');

});
Route::get('/food', function () {
	return view('food');

});
Route::get('/accessories', function () {
	return view('accessories');

});
Route::get('/voluntary', function () {
	return view('voluntary');

});
Route::get('/veterinary', function () {
	return view('veterinary');

});
Route::get('/hairdressing', function () {
	return view('hairdressing');

});
Route::get('/training', function () {
	return view('training');

});
Route::get('/nursery', function () {
	return view('nursery');

});
Route::get('/contact', function () {
	return view('contact');

});
Route::get('/incentive-plan', function () {
	return view('incentive-plan');

});
Route::group([

	'prefix' => 'dashboard',
	'middleware' => ['auth']

], function() {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/settings/profile', 'MemberController@profile');


	Route::get('/password_reset', 'ChangePasswordController@index')->name('password_reset');
	Route::get('/team/unilevel',  'TeamController@unilevel');

	Route::get('/ubicacion', 'HomeController@ubicacion');


	Route::get('/donaciones/new', 'DonacionesController@new');

	Route::get('/donaciones/all', 'DonacionesController@index')->name('DonacionesController');
	Route::post('/donaciones/all/show', 'DonacionesController@getDonacionesByUser');


	Route::get('/transactions/earnings', 'TransactionController@index')->name('earnings');
	Route::post('/transactions/earnings/show', 'TransactionController@getEarningsByUser');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
