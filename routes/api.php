<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PenertibanApiController;

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

Route::get('/penertiban/json', [PenertibanApiController::class,'json'])->name('penertiban.json');
Route::get('/penertiban/show_json/{gid}', [PenertibanApiController::class,'show_json'])->name('penertiban.show.json');
Route::post('/penertiban/store_json', [PenertibanApiController::class,'store_json'])->name('penertiban.store.json');
Route::delete('/penertiban/delete_json/{gid}', [PenertibanApiController::class,'delete_json'])->name('penertiban.delete.json');