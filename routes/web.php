<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('/', EmployeeController::class);

Route::resource('/employee', EmployeeController::class);
Route::get('employee/{id}/hapus', [EmployeeController::class, 'hapus'])->name('employee.hapus');
// Route::resource('employee/{id}/update', [EmployeeController::class, 'update'])->name('employee.update');
// Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/search', [EmployeeController::class, 'search']);


Route::get('/nyoba', function () {
    return view('nyoba');
});
Route::get('/nyoba2', function () {
    return view('nyoba2');
});