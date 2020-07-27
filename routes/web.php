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
/*Route::get('/', function(){
    $agent = new Agent();
    return $agent->browser(); //device  //platform
});*/




Route::get('/logout', function(){
    auth()->logout();
    return 'Logout';

});

Route::post('login', 'Auth\LoginController@login');
Route::post('register', 'Auth\RegisterController@register');
Route::get('register/confirm/resend', 'Auth\RegisterController@resendConfirmation')->name('auth.resend_confirmation');
Route::get('register/confirm/{confirmation_code}', 'Auth\RegisterController@confirm');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('user/email/verify', 'HomeController@VerifyEmail');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fetch/binery', 'SignalController@getBinery');
// Route::post('logout', 'HomeController@logout');
Route::post('change/status', 'SignalController@GoGo');
Route::post('changes/status', 'SignalController@GoGoGo');
Route::post('save/signal', 'SignalController@store');
Route::post('save/signal/gold', 'GoldController@Gold');
Route::post('save/binery', 'SignalController@Binery');
Route::get('telegram/post', 'HomeController@Telegram');
Route::get('send/all/email', 'HomeController@QueueMail');
Route::get('/time', function(){
    return \Carbon\Carbon::parse('2020-04-20 22:32:58')->timezone('Asia/Tehran')->format('Y/m');
});
Route::post('save/support', 'HomeController@Support');
Route::get('fetch/signal/{id}', 'SignalController@SignalFree');
Route::get('fetch/signal/silver', 'SignalController@SignalSilver');
Route::get('start/date', 'HomeController@start');
Route::get('end/start', 'HomeController@endStart');
Route::get('fetch/signal/gold', 'SignalController@SignalGold');
Route::get('fetch/signal/diamond', 'SignalController@SignalDiamond');
Route::get('fetch/date/{id}/{slug}/{token}', 'HomeController@Date');
Route::get('fetch/rate/user', 'SignalController@Rate');
Route::get('filter/signal', 'SignalController@Filter');
Route::get('fetch/user/data/{id}/{token}', 'HomeController@Auth');
Route::post('change/password', 'HomeController@ChangePass');
Route::post('change/name/email', 'HomeController@Change');
Route::get('signal', 'HomeController@chart');
Route::get('fetch/user/id', 'HomeController@UserID');
Route::post('login/auto', 'HomeController@Auto');
Route::get('fetch/support', 'HomeController@getSupport');
Route::post('send/answer', 'HomeController@SendAnswer');
Route::get('upgrade/plan', 'HomeController@Upgrade');
Route::get('fetch/http/guzzle', 'HomeController@TestHttp');
Route::get('/{any}', 'HomeController@welcome')->where('any', '.*');
Auth::routes();
## Helal
## Homa
## KoodakBold
## MehrBold
## Yekan



