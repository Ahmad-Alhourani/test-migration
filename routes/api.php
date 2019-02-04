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

//start_First_start
Route::resource('first', 'API\FirstAPIController');

//end_First_end

//start_Ahmad_start
Route::resource('ahmad', 'API\AhmadAPIController');

//end_Ahmad_end

//*****Do Not Delete Me
