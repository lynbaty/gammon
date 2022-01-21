<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use Database\Seeders\LocationSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
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

Route::get('/download', function () {
    return response('helloworld', 201)
        ->header('Content-Type', 'application/json')
        ->cookie('MyCookie', 'lkajsflaksflkasdfl;asfdl;kaf');
});
Route::resource('location', LocationController::class);
Route::resource('role', RoleController::class);
Route::resource('project', ProjectController::class);
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/checkrole', [UserController::class, 'role']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'isEngineer'], function () {
    Route::resource('role', RoleController::class);
});
