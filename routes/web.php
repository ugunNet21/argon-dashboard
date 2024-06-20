<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::get('/sign-in', function (){
    return view('admin.sign-in');
});
Route::get('/sign-up', function (){
    return view('admin.sign-up');
});
Route::get('/billing', function (){
    return view('admin.pages.biliing');
});
Route::get('/table', function (){
    return view('admin.pages.table');
});
