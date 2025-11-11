<?php

use App\Http\Controllers\V1\AlbumController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and are assigned to the "api"
| middleware group. Make something great!
|
*/

// Example route to return authenticated user (using sanctum, optional)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Example public API route
Route::get('/ping', function () {
    return response()->json(['message' => 'API is working! ✅']);
});

Route::prefix('v1')->group(function () {
    Route::apiResource("album", AlbumController::class);
});
