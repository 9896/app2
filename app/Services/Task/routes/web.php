<?php

use App\Services\Task\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Service - Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::group(['prefix' => 'task'], function() {

//     // The controllers live in src/Services/Task/Http/Controllers
//     // Route::get('/', 'UserController@index');

//     Route::get('/', function() {
//         return view('task::welcome');
//     });

// });

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function(){
           return view('dashboard');
    })->name('dashboard');

    Route::get('/task-list', [TaskController::class, 'get'])->name('tasklist');

    Route::post('/add-task', [TaskController::class, 'add']);

});

//require __DIR__.'/auth.php';

