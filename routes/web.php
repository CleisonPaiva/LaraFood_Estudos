<?php

use App\Http\Controllers\ACL\PermissionController;
use App\Http\Controllers\ACL\PermissionProfileController;
use App\Http\Controllers\Admin\DetailPlanController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\ACL\ProfileController;


use Illuminate\Support\Facades\Route;
/**
 * Route Permissions xProfile
 * */
Route::get('profile/{id}/permissions/create',[PermissionProfileController::class,'permissionsAvailable'])->name('profiles.permissions.available');
Route::post('profile/{id}/permissions/store',[PermissionProfileController::class,'attachPermissionProfile'])->name('profiles.permissions.attach');
Route::get('profile/{id}/permissions',[PermissionProfileController::class,'permissions'])->name('profiles.permissions');
//Route::resource('profiles/permissions',PermissionController::class);


/**
 * Route Permissions
 * */
Route::resource('admin/permissions',PermissionController::class);
Route::any('admin/permissions/search',[PermissionController::class,'search'])->name('permissions.search');


/**
 * Route Profile
 * */
Route::resource('admin/profiles',ProfileController::class);
Route::any('admin/profiles/search',[ProfileController::class,'search'])->name('profiles.search');

/**
 * Route Details Plans
 * */
Route::get('/plans/{url}/details/create',[DetailPlanController::class,'create'])->name('details.create');
Route::delete('/plans/{url}/details/{idDetail}',[DetailPlanController::class,'destroy'])->name('details.destroy');
Route::get('/plans/{url}/details/{idDetail}',[DetailPlanController::class,'show'])->name('details.show');
Route::put('/plans/{url}/details/{idDetail}',[DetailPlanController::class,'update'])->name('details.update');
Route::get('/plans/{url}/details/{idDetail}/edit',[DetailPlanController::class,'edit'])->name('details.edit');
Route::post('/plans/{url}/details',[DetailPlanController::class,'store'])->name('details.store');
Route::get('/plans/{url}/details',[DetailPlanController::class,'index'])->name('details.index');


/**
 * Route Plans
 * */
Route::resource('admin/plans',PlanController::class);
Route::any('admin/plans/search',[PlanController::class,'search'])->name('plans.search');
Route::get('admin',[PlanController::class,'admin'])->name('admin.index');



