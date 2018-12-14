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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/profile', function () {
    return view('profiles.index');
})->name('profile');
Route::get('/main', function () {
    return view('main');
});
Route::get('/home', function () {
    return view('pages.home');
})->name('home');
Route::get('/search', function () {
    return view('pages.search');
})->name('search');
Auth::routes();

// Doctor's Routing
Route::get('dlogin', function () {
    return view('doctor.login');
})->name('doctor.login');

Route::get('dregistration', function () {
    return view('doctor.register');
})->name('doctor.register');

Route::post('doctorRegistration', [
    'uses' => 'DoctorController@create',
    'as' => 'doctorRegistration'
]);

// hospital's Routing

Route::get('/hlogin', function () {
    return view('hospital.login');
})->name('hospital.login');

Route::get('/hregistration', function () {
    return view('hospital.register');
})->name('hospital.register');

