<?php

use App\Rate;
use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\QueryBuilder;

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
    return view('welcome');
});

//Route::get('/bookings/create',function (){
//    return view('bookings.create');
//});

//Route::get('/rates/{rate}/delete', ['as' => 'rates.delete', 'uses' => 'RatesController@delete']);
//Route::resource('/rates', 'RatesController');

Route::get('/feedbackSubjects/{feedbackSubject}/delete', ['as' => 'feedbackSubjects.delete', 'uses' => 'FeedbackSubjectsController@delete']);
Route::resource('/feedbackSubjects', 'FeedbackSubjectsController');

//Route::get('/roomStatuses/{roomStatus}/delete', ['as' => 'roomStatuses.delete', 'uses' => 'RoomStatusesController@delete']);
//Route::resource('/roomStatuses', 'RoomStatusesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['role:Admin|Maintenance|Manager|Guest']],function (){
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');

});

Route::group(['middleware' => ['role:Booking Staff|Admin|Maintenance|Manager']], function () {
    Route::resource('roomStatuses','RoomStatusesController');
    Route::get('/roomStatuses/{roomStatus}/delete', ['as' => 'roomStatuses.delete', 'uses' => 'RoomStatusesController@delete']);
    Route::resource('bookings', 'BookingController', ['except' => 'bookings.create']);
    Route::get('bookings/create', ['as' => 'bookings.create', 'uses' => 'BookingController@create']);
    Route::get('bookings/{booking}/delete',['as'=>'bookings.delete','uses'=>'BookingController@delete']);
    Route::resource('/rates', 'RatesController');
    Route::get('/rates/{rate}/delete', ['as' => 'rates.delete', 'uses' => 'RatesController@delete']);

});

Route::get('/user/{id}/profile', ['as'=>'users.update','uses'=>'UserController@edit'])
    ->middleware('auth');

//Route::post('/bookings', ['as' => 'bookings.index', 'uses' => 'BookingController@store']);
//Route::post('/bookings','BookingController@store');
//Route::get('/',function (){
//    $users = QueryBuilder::for(User::class)
//        ->allowedFilters(['name'])
//        ->get();
//    return $users;
//});


