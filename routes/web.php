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
    'uses' => 'Auth\DoctorRegisterController@create',
    'as' => 'doctor.register.submit'
]);
Route::post('/dlogin', 'Auth\doctorLoginController@login')->name('doctor.login.submit');

Route::get('profile/{id}', [
    'uses' => 'HomeController@doctorProfile',
    'as' => 'profile'
]);

// doctor dashboard
Route::get('ddashboard', [
    'uses' => 'DoctorController@dashboard',
    //'middleware' => ['auth:doctor'],
    'as' => 'doctor.dashboard'
]);

Route::get('/dfinished', function () {
    return view('doctor.pages.finishedappoint');
});
Route::get('/dprofile', function () {
    return view('doctor.pages.profile');
})->name('doctor.home');



// hospital's Routing
  
Route::get('/hlogin', function () {
    return view('hospital.login');
})->name('hospital.login');

Route::get('/hregistration', function () {
    return view('hospital.register');
})->name('hospital.register');

// AppointMent's Routing

Route::post('makeAppointment', [
    'uses' => 'AppointmentController@create',
    'as' => 'makeAppointment'
]);