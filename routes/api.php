<?php

use App\Http\Controllers\PetitionController;
use App\Http\Controllers\AuthorController;
use App\Models\Petition;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//To show all petitions
//Route::get('/petitions', [PetitionController::class, 'index']);

//To store a new petition
//Route::post('/petitions', [PetitionController::class, 'store']);

//If we want only some controller methods
//Route::resource('/petitions', PetitionController::class)->only(['index', 'show']);

//Using apiResource
Route::apiResource('/petitions', PetitionController::class);

//Create resource route for only index e show action for the AuthorController
Route::resource('/authors', AuthorController::class)->only(['index', 'show']);

