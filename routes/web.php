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

Route::get('/', function () {
    return view('pages.create-employee');
});
Route::get('/se', function () {
    return view('pages.search-employee');
});
Route::get('/mu', function () {
    return view('pages.manage-users');
});
Route::get('/i', function () {
    return view('pages.items');
});
Route::get('/cso', function () {
    return view('pages.create-sale-order');
});
Route::get('/uso', function () {
    return view('pages.upload-sale-order');
});
Route::get('/sso', function () {
    return view('pages.search-sale-order');
});
Route::get('/cmso', function () {
    return view('pages.complete-sale-order');
});
Route::get('/sms', function () {
    return view('pages.send-sms');
});
Route::get('/push', function () {
    return view('pages.push-notification');
});
