<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Example structure of a routes file. Being that it's in the api file, every route will have /api/ as a prefix.
// additional prefix of "user" will result in /api/users/{route}
// This grouping helps organization, and swagger auto documentation.
Route::controller(Controller::class)->prefix('users')->group(function () {
    Route::post('create', 'createUserList');
    Route::get('get', 'getUserLists');
    Route::get('get_paginated', 'getUserListsPaginated');
    Route::get('get/{id}', 'getUserList');
    Route::patch('update/{id}', 'updateUserList');
    Route::delete('delete/{id}', 'deleteUserList');
    Route::post('address', 'createUserListAddress');
    Route::post('raw', 'rawSQL');
    Route::get('get_with_address/{id}', 'getUserListwithAddress');
    Route::get('get_with_relations/{id}', 'getUserListwithRelations');
    Route::get('create_log', 'createLog');
});

Route::controller(Controller::class)->prefix('driverservice')->group(function () {
    Route::get('raw1', 'driverservice_raw_1');
    Route::get('eloquent1', 'driverservice_eloquent_1');
    Route::get('raw2', 'driverservice_raw_2');
    Route::get('eloquent2', 'driverservice_eloquent_2');
    Route::get('testing', 'test_driver');
});

Route::controller(Controller::class)->prefix('rabbit')->group(function () {
    Route::post('test', 'testRabbitMessages');
});

Route::controller(Controller::class)->prefix('auth')->group(function () {
    Route::post('login', 'login');
});
