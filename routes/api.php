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

//start_Test_start
Route::resource('test', 'API\TestAPIController');

//end_Test_end

//start_Ahmad_start
Route::resource('ahmad', 'API\AhmadAPIController');

//end_Ahmad_end

//start_School_start
Route::resource('school', 'API\SchoolAPIController');

//end_School_end

//start_Student_start
Route::resource('student', 'API\StudentAPIController');

//end_Student_end

//start_Branch_start
Route::resource('branch', 'API\BranchAPIController');

//end_Branch_end

//start_Company_start
Route::resource('company', 'API\CompanyAPIController');

//end_Company_end

//*****Do Not Delete Me
