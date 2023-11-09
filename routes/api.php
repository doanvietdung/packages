<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Octane\Facades\Octane;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test', function () {
    [$users, $servers,$wew] = Octane::concurrently([
                                                  fn() => 500000,
                                                  fn() => 5000,
                                                  fn() => 5000,
                                              ]);

    return  [$users, $servers,$wew] ;
});
