<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblvechileController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\RefuelrequisitionController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\WeeklycheckreportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\MinistrationController;

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
Route::get('/drivers', [DriverController::class, 'index']);
Route::post('/addnewdriver', [DriverController::class, 'addNewDriver']);
Route::post('/driverupdate', [DriverController::class, 'driverUpdate']);
Route::post('/release', [DriverController::class, 'releaseDriver']);
// Route::post('/drivinghistory', [DriverController::class, 'drivingHistory']);
Route::get('/drivers-driving-history-{license}', [DriverController::class, 'drivingHistory']);

// Manage Vehicle
Route::get('/vehicles', [VehicleController::class, 'index']);
Route::post('/addnewvehicle', [VehicleController::class, 'addNewVehicle']);
Route::post('/vehicleupdates', [VehicleController::class, 'vehicleUpdates']);
// Route::post('/vehicledocuments', [VehicleController::class, 'vehicleDocuments']);
Route::get('/vehicle-documents-{vcode}', [VehicleController::class, 'vehicleDocuments']);
Route::post('/adddocuments', [VehicleController::class, 'addNewDocuments']);
// Route::post('/vehicleministrations', [VehicleController::class, 'vehicleMinistrations']);
Route::get('/vehicle-ministrations-{vcode}', [VehicleController::class, 'vehicleMinistrations']);
Route::post('/add-minstartions', [VehicleController::class, 'addMinstartions']);
Route::get('/vehicle-overview-{vcode}', [VehicleController::class, 'vehicleOverVeiw']);



//manage refuel-requisition
Route::get('/refuel-requisition', [RefuelrequisitionController::class ,'index']);
Route::post('/addnew-refuelreq', [RefuelrequisitionController::class ,'addnewRefuelreq']);
Route::post('/updates-refuelreq', [RefuelrequisitionController::class ,'updatesRefuelreq']);
Route::post('/edit-refuelreq', [RefuelrequisitionController::class ,'editRefuelreq']);
// Route::post('/refuelreqhistory', [RefuelrequisitionController::class ,'refuelreqHistory']);
Route::get('/refuel-requisition-history-{vcode}', [RefuelrequisitionController::class ,'refuelreqHistory']);


// Weekly check report
Route::get('/create-weekly-report', [WeeklycheckreportController::class ,'generateReport']);
Route::post('/wselectdate', [WeeklycheckreportController::class ,'selectDate']);
Route::post('/store-report', [WeeklycheckreportController::class ,'storeReport']);
Route::get('/weekly-check-report', [WeeklycheckreportController::class, 'weeklyCheckReport']);
Route::get('/wtest', [WeeklycheckreportController::class, 'test']);


// notifications generation

Route::get('/date', [HomeController::class, 'calculateDate']);

Route::get('/cost', [HomeController::class, 'costCalculation']);


Route::get('/table', [WeeklycheckreportController::class, 'table']);

// ministartion
Route::get('/ministrations', [MinistrationController::class, 'index']);
Route::get('/ministration-overview-{vcode}', [MinistrationController::class, 'vehicleOverVeiw']);
Route::post('/addnewservice', [MinistrationController::class ,'addNewService']);
Route::get('/delete-{id}', [MinistrationController::class, 'deleteService']);

// Maintenance
Route::get('/maintenanceview', [MaintenanceController::class, 'viewMaintenance']);
Route::get('/add_maintenance', [MaintenanceController::class, 'addMaintenance']);
Route::get('/edit_maintenance-{id}', [MaintenanceController::class, 'editMaintenance']);
Route::post('/save_maintenance', [MaintenanceController::class, 'saveMaintenance']);
Route::get('/maintenanceitems', [MaintenanceController::class, 'maintenanceItems']);
Route::get('/add_maintenanceitems', [MaintenanceController::class, 'addMaintenanceItem']);
Route::get('/edit_maintenanceitems-{id}', [MaintenanceController::class, 'editMaintenanceItem']);
Route::post('/save_maintenanceitem', [MaintenanceController::class, 'saveMaintenanceItem']);

