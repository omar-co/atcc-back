<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\Admin\CatalogoController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\ExportAllController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\FilterController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\ObjetivosMirController;
use App\Http\Controllers\Admin\OdsController;
use App\Http\Controllers\Admin\PoliticaPublicaController;
use App\Http\Controllers\Admin\PoliticaPublicaNombreController;
use App\Http\Controllers\Admin\UpdateAbilitiesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AbilityController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\CapituloController;
use App\Http\Controllers\ConceptoController;
use App\Http\Controllers\ConfigByPathController;
use App\Http\Controllers\Core\ModelController;
use App\Http\Controllers\EliminarController;
use App\Http\Controllers\EntidadFederativaController;
use App\Http\Controllers\FinalidadController;
use App\Http\Controllers\FuenteFinanciamientoController;
use App\Http\Controllers\FuncionController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\ModalidadController;
use App\Http\Controllers\NivelObjetivoController;
use App\Http\Controllers\ObjetivoProgramaController;
use App\Http\Controllers\ObjetivosMirPorRamoController;
use App\Http\Controllers\OdsPorPpController;
use App\Http\Controllers\PartidaEspecificaController;
use App\Http\Controllers\ProgramaPresupuestalController;
use App\Http\Controllers\RamoController;
use App\Http\Controllers\RelacionEconomicaController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\SubfuncionController;
use App\Http\Controllers\TipoGastoController;
use App\Http\Controllers\UnidadResponsableController;
use App\Http\Resources\UserResource;
use App\Models\User;
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

Route::group([
    'prefix' => 'auth',
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware(['auth:api'])->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });
});

Route::middleware(['auth:api'])->group(function () {
    Route::apiResource('config', ConfigController::class);
    Route::apiResource('user', UserController::class);
    Route::apiResource('role', RoleController::class);
    Route::apiResource('ability', AbilityController::class);
    Route::post('save', SaveController::class);
    Route::post('generate', GenerateController::class);
    Route::delete('pp/delete/{pp}', EliminarController::class);
    Route::apiResource('ramo', RamoController::class);
    Route::get('config-by-path/{path}', ConfigByPathController::class);

    Route::middleware(['admin'])->group(function () {
        Route::group(['prefix' => 'collection'], function ($router) {
            Route::get('model', ModelController::class);
        });
        Route::group(['prefix' => 'admin'], function ($router) {
            Route::get('filtro/{type}', FilterController::class);
            Route::get('export', ExportAllController::class);
            Route::get('exportar/{type}', ExportController::class);
            Route::post('import', ImportController::class);
            Route::apiResource('ods', OdsController::class);
            Route::apiResource('mir', ObjetivosMirController::class);
            Route::apiResource('catalogo', CatalogoController::class);
            Route::apiResource('politicas-publicas/niveles', PoliticaPublicaController::class)->except('index');
            Route::get('politicas-publicas/niveles/{politicaPublica}', [PoliticaPublicaNombreController::class, 'index']);
            Route::apiResource('politicas-publicas', PoliticaPublicaController::class);
        });

        Route::group(['prefix' => 'settings'], function () {
            Route::get('updateAbilities', UpdateAbilitiesController::class);
        });
    });
});

Route::apiResource('modalidad', ModalidadController::class);
Route::apiResource('unidad-responsable', UnidadResponsableController::class)->except('show');
Route::apiResource('actividad', ActividadController::class)->except('show');
Route::apiResource('programa-presupuestal', ProgramaPresupuestalController::class)->except('show');
Route::get('programa-presupuestal/{idRamo}/{idModalidad}', [ProgramaPresupuestalController::class, 'show']);
Route::apiResource('json', JsonController::class);
Route::apiResource('capitulo', CapituloController::class);
Route::apiResource('concepto', ConceptoController::class);
Route::apiResource('partida-especifica', PartidaEspecificaController::class);
Route::apiResource('funcion', FuncionController::class)->except('show');
Route::apiResource('subfuncion', SubfuncionController::class)->except('show');
Route::apiResource('tipo-gasto', TipoGastoController::class);
Route::apiResource('fuente-financiamiento', FuenteFinanciamientoController::class);
Route::apiResource('entidad-federativa', EntidadFederativaController::class);
Route::get('relacion-economica/{ramo}/{programa}/{filtro}/{modalidad}', RelacionEconomicaController::class);
Route::get('nivel-objetivo', NivelObjetivoController::class);
Route::post('objetivo-mir/{ramo}', ObjetivosMirPorRamoController::class);
Route::get('objetivo-programa/{ramo}/{modalidad}/{pp}', ObjetivoProgramaController::class);
Route::get('ods/{ramo}/{modalidad}/{pp}', OdsPorPpController::class);
Route::get('unidad-responsable/{ramo}/{modalidad}/{pp}', [UnidadResponsableController::class, 'show']);
Route::get('actividad/{ramo}/{modalidad}/{pp}', [ActividadController::class, 'show']);
Route::get('finalidad/{ramo}/{modalidad}/{pp}', [FinalidadController::class, 'show']);
Route::get('funcion/{ramo}/{modalidad}/{pp}', [FuncionController::class, 'show']);
Route::get('subfuncion/{ramo}/{modalidad}/{pp}', [SubfuncionController::class, 'show']);
