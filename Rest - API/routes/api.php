<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Method GET
Route::get('/animals', [AnimalController::class, 'index']);

// Method POST
Route::post('/animals', [AnimalController::class, 'store']);

// Method PUT
Route::put('/animals/{id}', [AnimalController::class, 'update']);

// Method DELETE
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);


//  Method GET Student
Route::get('/students', [StudentController::class, 'index']);

// Method POST Student
Route::post('/students', [StudentController::class, 'store']);

// Membuat Method PUT Student
Route::put('/students/{id}', [StudentController::class, 'update']);

// Membuat Method DELETE Student
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
