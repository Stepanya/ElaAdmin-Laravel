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
    return view('dashboard.index');
});

Route::get('/customers', function () {
    return view('customer.customers');
});

Route::get('/work-allocation', function () {
    return view('agent.work_allocation');
});

Route::get('/allocate-work-to-qa', function () {
    return view('agent.allocate_work_to_qa');
});

Route::get('/qa-basket', function () {
    return view('agent.qa_basket');
});

Route::get('/customer-profile', function () {
    return view('customer.customer_profile');
});


Route::get('/admin/persons', 'App\Http\Controllers\LaratableController@laratableData')->name('admin.persons');
Route::get('/admin/work/allocation', 'App\Http\Controllers\LaratableController@workAllocation')->name('admin.work.allocation');


