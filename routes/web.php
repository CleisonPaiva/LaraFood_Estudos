<?php

use App\Http\Controllers\Admin\DetailPlanController;
use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

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
//Route::resource('plans/details',DetailPlanController::class);
/**
 * Route Plans
 * */
Route::resource('admin/plans',PlanController::class);
Route::any('admin/plans/search',[PlanController::class,'search'])->name('plans.search');

Route::get('admin',[PlanController::class,'admin'])->name('admin.index');



