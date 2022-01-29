<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblvechileController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\FileUploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/modals', function () {
    return view('pages.modals');
});

Route::get('/managevehicle', [TblvechileController::class, 'managevehicle']);
Route::get('/driverlist', [DriverController::class, 'driverList']);
Route::post('/addnewdriver', [DriverController::class, 'addNewDriver']);
Route::post('/driverupdate', [DriverController::class, 'driverUpdate']);



Route::get('/vehicle', [VehicleController::class, 'vehicleList']);
Route::post('/addnewvehicle', [VehicleController::class, 'addNewVehicle']);


