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
    $classNumber = 73;
    $studentName = "Eustache";
    return view('home', compact("classNumber", "studentName"));
})->name("home");

Route::get('/about', function () {
    $pageTitle = "About us";
    return view('about', compact("pageTitle"));
})->name("about");

Route::get('/members', function () {
    $pageTitle = "Here my class mates";
    return view('members', compact("pageTitle"));
})->name("members");
