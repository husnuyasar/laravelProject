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
    return redirect(route('dashboard::index'));
});

/*
// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
*/
Auth::routes(); // bunu yazmak yerine yukarıdaki yolları gerekli controllerlara yönlendirerek de işimizi görebiliriz

Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth'],'prefix'=>'dashboard'], function()
{
    Route::get('/', 'HomeController@index')->name('dashboard::index');
    Route::get('/newCity','HomeController@showNewCityPage')->name('dashboard::new');
    Route::post('/addCity','HomeController@addNewCity')->name('dashboard::add');
    Route::post('/listdetailstable', 'HomeController@listDetailsJson')->name('dashboard::listdetailstable');
    Route::get('/delete/{detail}','HomeController@deleteCity')->name('dashboard::delete');
    Route::get('/edit/{detail}','HomeController@showEditCityPage')->name('dashboard::editPage');
    Route::post('/edit','HomeController@editCityPage')->name('dashboard::edit');
});


