<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/companies', [CompanyController::class, 'index']);

// can use any method
Route::any('/companies/edit/{id}', [CompanyController::class, 'edit']);
