<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Spacecraft;
use App\Http\Controllers\SpacecraftController;

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



Route::get('spacecrafts', SpacecraftController::class . '@index');
Route::get('spacecrafts/{spacecraft}', SpacecraftController::class . '@show');
Route::post('spacecrafts', SpacecraftController::class . '@store');
Route::put('spacecrafts/{spacecraft}', SpacecraftController::class . '@update');
Route::delete('spacecrafts/{spacecraft}', SpacecraftController::class . '@delete');
