<?php

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

// Admin
Route::get('/ce', function () {
    return view('pages.admin.create-employee');
});
Route::get('/se', function () {
    return view('pages.admin.search-employee');
});
Route::get('/mu', function () {
    return view('pages.admin.manage-users');
});
Route::get('/i', function () {
    return view('pages.admin.items');
});
Route::get('/cso', function () {
    return view('pages.admin.create-sale-order');
});
Route::get('/uso', function () {
    return view('pages.admin.upload-sale-order');
});
Route::get('/sso', function () {
    return view('pages.admin.search-sale-order');
});
Route::get('/cmso', function () {
    return view('pages.admin.complete-sale-order');
});
Route::get('/sms', function () {
    return view('pages.admin.send-sms');
});
Route::get('/push', function () {
    return view('pages.admin.push-notification');
});
Route::get('/ud', function () {
    return view('pages.admin.upgrade-downgrade');
});
Route::get('/ud', function () {
    return view('pages.admin.upgrade-downgrade');
});
Route::get('/w', function () {
    return view('pages.admin.wallet');
});
Route::get('/wv', function () {
    return view('pages.admin.wallet-view');
});
Route::get('/edv', function () {
    return view('pages.admin.employee-dashbord-view');
});



// Employee
Route::get('/ed', function () {
    return view('pages.employee.employee-dashboard');
});
