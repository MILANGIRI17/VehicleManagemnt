<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DriverInfoController;
use App\Http\Controllers\Backend\ExpensesInfoController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\VehicleInfoController;
use App\Http\Controllers\Backend\VehicleTypeController;
use App\Http\Controllers\Backend\VendorInfoController;
use App\Http\Controllers\Calculator\PriceCalculatorController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Backend'],function(){
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'login']);
});

Route::group(['namespace'=>'Backend','middleware'=>'auth'],function(){
    Route::any('/',[DashboardController::class,'index'])->name('dashboard');

    Route::group(['prefix'=>'user'],function(){
        Route::any('/',[UserController::class,'index'])->name('user');
        Route::any('/delete-user/{criteria?}',[UserController::class,'delete'])->name('delete-user');
        Route::any('/edit-user/{criteria?}',[UserController::class,'edit'])->name('edit-user');
        Route::any('/edit-user-action',[UserController::class,'editAction'])->name('edit-user-action');
    });

    Route::group(['prefix'=>'vehicleType'],function(){
        Route::any('/',[VehicleTypeController::class,'index'])->name('vehicle_type');
        Route::any('/add-vehicle-type',[VehicleTypeController::class,'add'])->name('add-vehicle-type');
        Route::any('/delete-vehicle-type/{criteria?}',[VehicleTypeController::class,'delete'])->name('delete-vehicle-type');
        Route::any('/edit-vehicle-type/{criteria?}',[VehicleTypeController::class,'edit'])->name('edit-vehicle-type');
        Route::any('/delete-vehicle-type-action',[VehicleTypeController::class,'editAction'])->name('edit-vehicle-type-action');
        Route::any('/update-vehicleType-status',[VehicleTypeController::class,'updateVehicleTypeStatus'])->name('update-vehicleType-status');
    });

    Route::group(['prefix'=>'vehicle_info'],function(){
        Route::any('/',[VehicleInfoController::class,'index'])->name('vehicle_info');
        Route::any('/add-vehicle-info',[VehicleInfoController::class,'add'])->name('add-vehicle-info');
        Route::any('/delete-vehicle-info/{criteria?}',[VehicleInfoController::class,'delete'])->name('delete-vehicle-info');
        Route::any('/edit-vehicle-info/{criteria?}',[VehicleInfoController::class,'edit'])->name('edit-vehicle-info');
        Route::any('/edit-vehicle-info-action',[VehicleInfoController::class,'editAction'])->name('edit-vehicle-info-action');
    });

    Route::group(['prefix'=>'driver_info'],function(){
        Route::any('/',[DriverInfoController::class,'index'])->name('driver_info');
        Route::any('/add-driver-info',[DriverInfoController::class,'add'])->name('add-driver-info');
        Route::any('/delete-driver-info/{criteria?}',[DriverInfoController::class,'delete'])->name('delete-driver-info');
        Route::any('/edit-driver-info/{criteria?}',[DriverInfoController::class,'edit'])->name('edit-driver-info');
        Route::any('/edit-driver-info-action',[DriverInfoController::class,'editAction'])->name('edit-driver-info-action');
    });

    Route::group(['prefix'=>'vendor_info'],function(){
        Route::any('/',[VendorInfoController::class,'index'])->name('vendor_info');
        Route::any('/add-vendor-info',[VendorInfoController::class,'add'])->name('add-vendor-info');
        Route::any('/delete-vendor-info/{criteria?}',[VendorInfoController::class,'delete'])->name('delete-vendor-info');
        Route::any('/edit-vendor-info/{criteria?}',[VendorInfoController::class,'edit'])->name('edit-vendor-info');
        Route::any('/edit-vendor-info-action',[VendorInfoController::class,'editAction'])->name('edit-vendor-info-action');
    });

    Route::group(['prefix'=>'expenses_info'],function(){
        Route::any('/',[ExpensesInfoController::class,'index'])->name('expenses_info');
        Route::any('/add-expenses-info',[ExpensesInfoController::class,'add'])->name('add-expenses-info');
        Route::any('/delete-expenses-info/{criteria?}',[ExpensesInfoController::class,'delete'])->name('delete-expenses-info');
        Route::any('/edit-expenses-info/{criteria?}',[ExpensesInfoController::class,'edit'])->name('edit-expenses-info');
        Route::any('/edit-expenses-info-action',[ExpensesInfoController::class,'editAction'])->name('edit-expenses-info-action');
    });

    Route::any('/fetch-vehicle-type',[PriceCalculatorController::class,'index'])->name('fetch-vehicle-type');

    Route::any('/logout',[LoginController::class,'logout'])->name('logout');
});
