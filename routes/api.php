<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerRecordsController;
use App\Http\Controllers\InventoryController;

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



Route::post('addCustomers', [CustomerRecordsController::class, 'store']);
Route::post('addItems', [InventoryController::class, 'store']);
// Route::get('showall', [CustomerRecordsController::class, 'index']);

Route::put('updateCustomers/{id}', [CustomerRecordsController::class, 'update']);
Route::delete('DeleteCustomers/{id}', [CustomerRecordsController::class, 'destroy']);


Route::put('updateItems/{id}', [InventoryController::class, 'update']);
Route::delete('DeleteItems/{id}', [InventoryController::class, 'destroy']);

// Route::resource('resource', InventoryController::class);
// Route::resource('resource', CustomerRecordsController::class);