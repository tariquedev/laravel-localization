<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('setlocale/{locale}',function($lang){
    Session::put('locale',$lang);
    return redirect()->back();   
})->name('Lang');

Route::group(['middleware' => ['language']], function () {
    // Add your all routes here
});