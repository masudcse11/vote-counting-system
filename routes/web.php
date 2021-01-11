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
    return view('welcome');
});

Route::get('result', 'ResultController@voteCountingPublicDisplay')->name('public.results');

// Guest Routes
Route::group(['namespace' => 'Auth', 'middleware' => ['guest']], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login')->name('postLogin');

});

// Auth Routes
Route::group(['middleware' => ['auth']], function () {
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('dashboard', 'DashboardController@dashboardMain')->name('dashboard');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register')->name('postRegister');
//    Route::get('change-password', 'Auth\AuthController@showChangePasswordForm')->name('change-password');
//    Route::post('update-password', 'Auth\AuthController@updatePassword')->name('update-password');


    // Candidate CRUD Routes
    Route::get('candidate', 'CandidateController@index')->name('candidate.index');
    Route::get('candidate/create', 'CandidateController@create')->name('candidate.create');
    Route::post('candidate/store', 'CandidateController@store')->name('candidate.store');
    Route::get('candidate/{id}/show', 'CandidateController@show')->name('candidate.show');
    Route::get('candidate/{id}/edit', 'CandidateController@edit')->name('candidate.edit');
    Route::put('candidate/{id}/update', 'CandidateController@update')->name('candidate.update');
    Route::delete('candidate/{id}/delete', 'CandidateController@delete')->name('candidate.delete');


    Route::get('year', 'YearController@showYearForm')->name('yearInput');
    Route::post('year', 'RegisterController@register')->name('postYear');


});


require __DIR__.'/auth.php';
