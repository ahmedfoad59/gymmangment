<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group(['namespace' => 'App\Http\Controllers\ApiControllers'] , function(){
    
    Route::get('allusers' , 'GustController@users');
    // Route::get('allcountry' , 'GustController@allcountry');
    // Route::post('addcountry' , 'GustController@addcountry');
    Route::post('customcoach' , 'GustController@customcoach');

    Route::post('auth/login' , 'AuthController@login');

    Route::post('auth/register' , 'AuthController@register');

    Route::get('auth/user/{id}' , 'AuthController@getUserData');
    Route::post('updaterate' , 'GustController@updaterate');



});


Route::group(['namespace' => 'App\Http\Controllers\ApiControllers'] , function(){
    
});



Route::group(['namespace' => 'App\Http\Controllers\ApiControllers'] , function(){
    
    Route::get('getprofil/{id}' , 'GustController@getprofil');


    Route::get('muscles/all' , 'MuscleController@getAllMuscles');
    Route::get('muscle/{id}' , 'MuscleController@getMuscle');

    Route::get('muscle/exercises/{id}' , 'MuscleController@getMuscleExercises');

    Route::get('exercises/all' , 'ExerciseController@getAllExercises');
    Route::get('exercise/{id}' , 'ExerciseController@getExercise');


    Route::get('plan-by-day/{user_id}/{day}' , 'PlanController@getUserPlanByDay');
    Route::get('plan-by-muscle/{user_id}/{muscle_id}' , 'PlanController@getUserPlanByMuscle');
    Route::get('plan-by-muscle-day/{user_id}/{muscle_id}/{day}' , 'PlanController@getUserPlanByMuscleAndDay');
    Route::post('store' , 'PlanController@store');
    
});


