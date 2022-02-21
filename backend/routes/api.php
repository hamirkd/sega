<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController; 
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\SalarieController;
use App\Http\Controllers\RubriqueController;
use App\Http\Controllers\DeclarationsRetenueController;
use App\Http\Controllers\TraitementsDasController;
use App\Http\Controllers\TraitementsDtsController;

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


Route::middleware('auth:api')->group(function() {
    Route::apiResource('societe', 'App\Http\Controllers\SocieteController');
    Route::apiResource('salarie', 'App\Http\Controllers\SalarieController');
    Route::get('salarie/societe/{societe}',[SalarieController::class,'getListBySociete']);
    Route::apiResource('rubrique', 'App\Http\Controllers\RubriqueController');
    Route::get('rubrique/societe/{societe}',[RubriqueController::class,'getListBySociete']);
    Route::delete('rubrique/societe/{societe}',[RubriqueController::class,'destroyAll']);
    Route::put('auth/update', 'App\Http\Controllers\AuthController@update');
    Route::get('auth/user-profile', 'App\Http\Controllers\AuthController@userProfile');
    /** Donnees de base retenue */
    Route::apiResource('declaration-retenue', 'App\Http\Controllers\DeclarationsRetenueController');
    Route::post('declaration-retenue/edit11', [DeclarationsRetenueController::class,'edit11']);
    Route::post('declaration-retenue/edit10xls', [DeclarationsRetenueController::class,'edit10xls']);
    
    Route::post('declaration-retenue/getByMoisAnnee', [DeclarationsRetenueController::class,'getByMoisAnnee']);
    Route::post('declaration-retenue/saveManySalariesInDeclarationRetenu', [DeclarationsRetenueController::class,'saveManySalariesInDeclarationRetenu']);
    Route::post('declaration-retenue/getSalariesByMoisAnneeSociete', [DeclarationsRetenueController::class,'getSalariesByMoisAnneeSociete']);
    
    /** Traitement DAS */
    Route::apiResource('traitement-das', 'App\Http\Controllers\TraitementsDasController');
    Route::post('traitement-das/getByTrimestreAnnee', [TraitementsDasController::class,'getByTrimestreAnnee']);
    Route::post('traitement-das/saveManySalariesInTraitementDas', [TraitementsDasController::class,'saveManySalariesInTraitementDas']);
    Route::post('traitement-das/getSalariesByTrimestreAnneeSociete', [TraitementsDasController::class,'getSalariesByTrimestreAnneeSociete']);
    

    /** Traitement DTS */
    Route::apiResource('traitement-dts', 'App\Http\Controllers\TraitementsDtsController');
    Route::post('traitement-dts/getByTrimestreAnnee', [TraitementsDtsController::class,'getByTrimestreAnnee']);
    Route::post('traitement-dts/saveManySalariesInTraitementDts', [TraitementsDtsController::class,'saveManySalariesInTraitementDts']);
    Route::post('traitement-dts/getSalariesByTrimestreAnneeSociete', [TraitementsDtsController::class,'getSalariesByTrimestreAnneeSociete']);
    

});