<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\BinanceController;

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

Route::post('/password-forget', [PasswordResetController::class, 'generate_password_init_token']);
Route::post('/password-verify', [PasswordResetController::class, 'verif_token_enabled_to_init_password']);
Route::post('/password-init', [PasswordResetController::class, 'reset_password_init']);
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/findAllUser',[AuthController::class,'findAllUser']);
    Route::delete('/deleteUser/{user}',[AuthController::class,'deleteUser']);
    Route::get('/bloquerUser/{user}',[AuthController::class,'bloquerUser']);
});

    // Route::get('findAllUser',[AuthController::class,'findAllUser']);
    Route::get('/achats_/nombre_titre_acheter/{titre}', [AchatController::class, 'nombre_titre_acheter']);

Route::middleware('auth:api')->group(function() {
    Route::apiResource('titres', 'App\Http\Controllers\TitreController');
    Route::apiResource('achats', 'App\Http\Controllers\AchatController');
    Route::apiResource('binance', 'App\Http\Controllers\BinanceController');
    // Route::get('/binance/{binance}', [BinanceController::class, 'show']);
    Route::put('/achats_/payer/{achat}', [AchatController::class, 'payer']);
    Route::put('/achats_/supprimer/{achat}', [AchatController::class, 'supprimer']);
    Route::get('/achats_/getforme', [AchatController::class, 'getforme']);
    Route::put('auth/update', 'App\Http\Controllers\AuthController@update');
    Route::get('auth/user-profile', 'App\Http\Controllers\AuthController@userProfile');
    //Route::get('/achats_/nombre_titre_acheter/{titre}', [AchatController::class, 'nombre_titre_acheter']);
});