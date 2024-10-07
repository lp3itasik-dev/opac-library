<?php

use App\Http\Controllers\API\BcAPIController;
use App\Http\Controllers\API\VbcebookAPIController;
use App\Http\Controllers\API\DesideratasController;
use App\Http\Controllers\API\EbAPIController;
use App\Http\Controllers\API\EditrepoAPIController;
use App\Http\Controllers\API\InputarsipAPIController;
use App\Http\Controllers\API\InputpedomanAPIController;
use App\Http\Controllers\API\RepoController;
use App\Http\Controllers\API\ServiceAPIController;
use App\Http\Controllers\API\TypesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', [TypesController::class, 'get_all'])->name('types.get');
Route::get('/repositories', [RepoController::class, 'get_all'])->name('repositories.get');
Route::get('/desideratas', [DesideratasController::class, 'get_all'])->name('desideratas.get');
Route::get('/services', [ServiceAPIController::class, 'get_all'])->name('desideratas.get');
Route::get('/bcebook', [VbcebookAPIController::class, 'get_all'])->name('bcebook.get');
Route::get('/arsip', [InputarsipAPIController::class, 'get_all'])->name('arsip.get');
Route::get('/pedoman', [InputpedomanAPIController::class, 'get_all'])->name('pedoman.get');
Route::get('/editrepo', [EditrepoAPIController::class, 'get_all'])->name('repositories.get');
Route::get('/bc', [BcAPIController::class, 'get_all'])->name('bc.get');
Route::get('/eb', [EbAPIController::class, 'get_all'])->name('eb.get');