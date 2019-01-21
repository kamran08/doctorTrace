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
Auth::routes();


Route::get('userprofile/{id}', [
    'uses' => 'HomeController@userProfile',
    // 'middleware' => ['auth'],
    'as' => 'user.profile'
]);

// Doctor's Routing

Route::get('dlogin', [
    'uses' => 'HomeController@showDLogin',
    'middleware' => ['guest'],
    'as' => 'doctor.login'
]);


Route::get('dregistration', [
    'uses' => 'HomeController@showDRegistration',
    'middleware' => ['guest'],
    'as' => 'doctor.register'
]);
Route::get('/getAllDoctorName', [
    'uses' => 'HomeController@getAllDoctorName',
    'as' => 'getAllDoctorName'
]);


Route::post('doctorRegistration', [
    'uses' => 'Auth\DoctorRegisterController@create',
    'as' => 'doctor.register.submit'
]);
Route::post('/doctorPicUpdate', [
    'uses' => 'DoctorController@doctorPicUpdate',
    'as' => '/doctorPicUpdate'
]);


Route::post('/dlogin', 'Auth\doctorLoginController@login')->name('doctor.login.submit');

Route::get('profile/{id}', [
    'uses' => 'HomeController@doctorProfile',
    // 'middleware' => ['auth'],
    'as' => 'profile'
]);

// doctor dashboard
Route::get('ddashboard', [
    'uses' => 'DoctorController@dashboard',
    //'middleware' => ['auth:doctor'],
    'as' => 'doctor.dashboard'
]);

Route::post('/appointmentSearchByDate', [
    'uses' => 'DoctorController@appointmentSearchByDate',
    //'middleware' => ['auth:doctor'],
    'as' => 'doctor.appointmentSearchByDate'
]);
Route::post('/updateStatus', [
    'uses' => 'DoctorController@updateStatus',
    //'middleware' => ['auth:doctor'],
    'as' => 'doctor.updateStatus'
]);

Route::get('/dfinished', function () {
    return view('doctor.pages.finishedappoint');
});




// hospital's Routing
  
Route::get('/hlogin', function () {
    return view('hospital.login');
})->name('hospital.login');

Route::get('/hregistration', function () {
    return view('hospital.register');
})->name('hospital.register');

// AppointMent's Routing

Route::post('/makeAppointment', [
    'uses' => 'AppointmentController@create',
    'as' => 'makeAppointment'
]);
Route::post('/showByDate', [
    'uses' => 'AppointmentController@showByDate',
    'as' => 'showByDate'
]);
Route::post('/showByDate', [
    'uses' => 'AppointmentController@showByDate',
    'as' => 'showByDate'
]);
Route::post('/userAppoShowByDate', [
    'uses' => 'AppointmentController@userAppoShowByDate',
    'as' => 'userAppoShowByDate'
]);
Route::post('/cancleAppointment', [
    'uses' => 'AppointmentController@delete',
    'as' => 'cancleAppointment'
]);

// Searching Routing

Route::get('/indexSearch', [
    'uses' => 'SearchController@index',
    'as' => 'indexSearch'
]);
Route::post('/searchByKey', [
    'uses' => 'SearchController@searchByKey', 
    'as' => 'searchByKey'
]);
Route::get('/showAllDoctor', [
    'uses' => 'SearchController@showAllDoctor', 
    'as' => 'showAllDoctor'
]);


// User Routing 


Route::post('/makeReviewByUser', [
    'uses' => 'AppointmentController@makeReviewByUser',
    'as' => 'makeReviewByUser'
]);
Route::post('/app/upload-avater', [
    'uses' => 'AppointmentController@upload',
   
]);






Route::get('/getReviewById/{id}', [
    'uses' => 'AppointmentController@getReviewById',
    'as' => 'getReviewById'
]);

// ChatBot
Route::get('/bot', function () {
    return view('pages.bot');
})->name('bot');

