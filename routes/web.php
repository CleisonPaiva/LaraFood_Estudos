<?php

use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

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
Route::resource('admin/plans',PlanController::class);
Route::any('admin/plans/search',[PlanController::class,'search'])->name('plans.search');
Route::get('admin',[PlanController::class,'admin'])->name('admin.index');





Route::get('/', function () {
    return view('welcome');
});
