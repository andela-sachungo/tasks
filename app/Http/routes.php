<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => 'web'], function () {

    /**
     * Show the welcome page
     */
    Route::get('/', function () {
        return view('welcome');
    });

    /**
     * Authentication Routes...
     * Register all of the routes needed for registration, login, and password reset
     */
    Route::auth();

    /**
     * Get the task form
     *
     */
    Route::get('/tasks', 'TaskController@index');
    /**
     * Add New Task
     */
    Route::post('/task', 'TaskController@store');

    /**
     * Delete Task
     */
    Route::delete('/task/{task}', 'TaskController@destroy');
});
