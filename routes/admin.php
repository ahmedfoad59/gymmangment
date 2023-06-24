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
// , 'namespace' => 'AdminControllers'

Route::group(['namespace' => 'App\Http\Controllers\AdminControllers']  , function (){

    Route::get('/home' , 'DashboardController@index') -> name('admin.home') ;
});
 

// users routes
Route::group(['namespace' => 'App\Http\Controllers\AdminControllers'] , function(){
    Route::get('/users-list' , 'UserController@index') ->name('admin.users-list');
    Route::get('/user-destroy/{id}' , 'UserController@destroy') ->name('admin.destroy-user');
    Route::get('/change-status/{id}' , 'UserController@changeStatus') ->name('admin.changeStatus-user');
    Route::get('/add-user' , 'UserController@create') ->name('admin.add-user');
    Route::post('/store-user' , 'UserController@store') ->name('admin.store-user');
});

// muscles routes
Route::group(['namespace' => 'App\Http\Controllers\AdminControllers'] , function(){
    Route::get('/muscles-list' , 'MuscleController@index') ->name('admin.muscles-list');
    Route::get('/muscle-destroy/{id}' , 'MuscleController@destroy') ->name('admin.destroy-muscle');

    Route::get('/add-muscle' , 'MuscleController@create') ->name('admin.add-muscle');
    Route::post('/store-muscle' , 'MuscleController@store') ->name('admin.store-muscle');
});


Route::group(['namespace' => 'App\Http\Controllers\AdminControllers'] , function(){
    Route::get('/exercises-list' , 'ExerciseController@index') ->name('admin.exercises-list');
    Route::get('/add-exercise' , 'ExerciseController@create') ->name('admin.add-exercise');
    Route::post('/store-exercise' , 'ExerciseController@store') ->name('admin.store-exercise');
    //Route::get('/edit-subcategory/{id}' , 'SubcategoryController@edit') ->name('admin.edit-subcategory');
    //Route::post('/update-subcategory/{id}' , 'SubcategoryController@update') ->name('admin.update-subcategory');
    Route::get('/exercise-destroy/{id}' , 'ExerciseController@destroy') ->name('admin.destroy-exercise');
    //Route::get('/subcategory-changeStatus/{id}' , 'SubcategoryController@changeStatus') ->name('admin.subcategory-change-status');
});



// coashes routes
Route::group(['namespace' => 'App\Http\Controllers\AdminControllers'] , function(){
    Route::get('/coashes-list' , 'CoashController@index') ->name('admin.coashes-list');
    Route::get('/coash-destroy/{id}' , 'CoashController@destroy') ->name('admin.destroy-coash');

    Route::get('/add-coash' , 'CoashController@create') ->name('admin.add-coash');
    Route::post('/store-coash' , 'CoashController@store') ->name('admin.store-coash');
});

// plans routes
Route::group(['namespace' => 'App\Http\Controllers\AdminControllers'] , function(){
    Route::get('/plans-list' , 'PlanController@index') ->name('admin.plans-list');
    Route::get('/plan-destroy/{id}' , 'PlanController@destroy') ->name('admin.destroy-plan');

    Route::get('/add-plan' , 'PlanController@create') ->name('admin.add-plan');
    Route::post('/store-plan' , 'PlanController@store') ->name('admin.store-plan');
});