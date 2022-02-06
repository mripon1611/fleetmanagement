<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblvechileController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\RefuelrequisitionController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\WeeklycheckreportController;
use App\Http\Controllers\HomeController;

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


// Home page
Route::get('/', [HomeController::class, 'index']);



// Route::get('/modals', function () {
//     return view('pages.modals');
// });
// Route::get('/managevehicle', [TblvechileController::class, 'managevehicle']);

// Manage Driver
Route::get('/driverlist', [DriverController::class, 'index']);
Route::post('/addnewdriver', [DriverController::class, 'addNewDriver']);
Route::post('/driverupdate', [DriverController::class, 'driverUpdate']);
Route::post('/drivinghistory', [DriverController::class, 'drivingHistory']);
// Route::get('/{dlicense}', [DriverController::class, 'drivingHistory']);

// Manage Vehicle
Route::get('/vehicle', [VehicleController::class, 'index']);
Route::post('/addnewvehicle', [VehicleController::class, 'addNewVehicle']);
Route::post('/vehicleupdates', [VehicleController::class, 'vehicleUpdates']);
Route::post('/vehicledocuments', [VehicleController::class, 'vehicleDocuments']);
Route::post('/adddocuments', [VehicleController::class, 'addNewDocuments']);

//manage refuel-requisition
Route::get('/refuel-requisition', [RefuelrequisitionController::class ,'index']);
Route::post('/addnew-refuelreq', [RefuelrequisitionController::class ,'addnewRefuelreq']);
Route::post('/updates-refuelreq', [RefuelrequisitionController::class ,'updatesRefuelreq']);
Route::post('/refuelreqhistory', [RefuelrequisitionController::class ,'refuelreqHistory']);


// Weekly check report
Route::get('/create-weekly-report', [WeeklycheckreportController::class ,'generateReport']);
Route::post('/wselectdate', [WeeklycheckreportController::class ,'selectDate']);
Route::post('/store-report', [WeeklycheckreportController::class ,'storeReport']);
Route::get('/weekly-check-report', [WeeklycheckreportController::class, 'weeklyCheckReport']);


