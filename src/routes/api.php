<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CathoController;
use App\Http\Controllers\ProgramathorController;

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


Route::prefix('catho')->group(function () {
    
    Route::get('/list-jobs', [CathoController::class, 'getJobs']);

});

Route::prefix('programathor')->group(function () {

    Route::get('/list-jobs', [ProgramathorController::class, 'getJobs']);

});
