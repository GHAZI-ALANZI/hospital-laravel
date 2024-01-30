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

Route::get('/', function () { return view('index');})->name('main');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/services', function () {return view('services');})->name('services');
Route::get('/department', function () {return view('department');})->name('department');
Route::get('/department-single', function () {return view('department-single');})->name('department-single');
Route::get('/doctor', function () {return view('doctor');})->name('doctor');
Route::get('/doctor-single', function () {return view('doctor-single');})->name('doctor-single');
Route::get('/appoinment', function () {return view('appoinment');})->name('appoinment');
Route::get('/blog-sidebar', function () {return view('blog-sidebar');})->name('blog-sidebar');
Route::get('/blog-single', function () {return view('blog-single');})->name('blog-single');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::post('/mail', function () {return view('mail');})->name('mail');
