<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-time-country', 'Api\SPAController@Time');
Route::get('fetch-data-coin/{id}', 'Api\SPAController@Coin');
Route::get('search/{value}', 'Api\SPAController@search');
Route::get('exchange/{input}/{dollar}/{euro}/{pound}', 'Api\SPAController@exchange');
Route::get('fetch/fiat', 'Api\SPAController@Fiat');
Route::get('fetch/fiat/a/{pound}', 'Api\SPAController@Fiaat');
Route::get('slm', 'Api\SPAController@slm');
//https://www.megaweb.ir/api/digital-money
//https://www.megaweb.ir/api/money
//http://www.tgju.org/?act=sanarateservice&client=tgju&noview&type=json