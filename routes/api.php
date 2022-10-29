<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\userdataController;

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

Route :: post('add-user', [userdataController::class, 'store']);

Route :: get('get-user', [userdataController::class, 'index']);

Route::get('report', [userdataController::class, 'report']) -> name('web.search');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

