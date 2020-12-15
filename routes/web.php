<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/laratables', function () {
    return view('laratables');
});

Route::get('/work-allocation', function () {
    return view('WorkAllocation');
});

Route::get('/work-allocation-customers', function () {
    return view('WorkAllocationCustomers');
});

Route::get('/customer-profile', function () {
    return view('CustomerProfile');
});


Route::get('/admin/persons', 'App\Http\Controllers\LaratableController@laratableData')->name('admin.persons');
Route::get('/admin/work/allocation', 'App\Http\Controllers\LaratableController@workAllocation')->name('admin.work.allocation');

Route::get('/calculator', function () {
    return view('calculator');
});

