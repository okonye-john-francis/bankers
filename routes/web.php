<?php

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
	$current_page = 'page1';
    return view('pages.page1', compact('current_page'));
});

Route::get('/page2', function () {
	$current_page = 'page2';
    return view('pages.page2', compact('current_page'));
});

Route::get('/page3', function () {
	$current_page = 'page3';
    return view('pages.page3', compact('current_page'));
});
