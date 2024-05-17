<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobPostController;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/jobs/search/{title}', [JobPostController::class, 'search']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//get all jobs
//Route::get('/jobs', [JobPostController::class, 'index']);

//add jobs
//Route::post('/jobs',[JobPostController::class, 'store']);


Route::resource('jobs', JobPostController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//search jobs
