<?php

use App\Http\Controllers\Admin\DetailPlanController;
use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

/**
 * Route Details Plans
 * */

Route::get('/plans/{url}/details',[DetailPlanController::class,'index'])->name('details.index');

/**
 * Route Plans
 * */
Route::resource('admin/plans',PlanController::class);
Route::any('admin/plans/search',[PlanController::class,'search'])->name('plans.search');

Route::get('admin',[PlanController::class,'admin'])->name('admin.index');



