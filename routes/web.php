<?php

use App\Http\Controllers\jobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Support\Arr;

// views
Route::view('/', 'welcome')->name('home');
Route::view('/about', 'about');
Route::view('/contact' , 'contact');

Route::controller(jobController::class)->group(function () {
    // index
    Route::get('/jobs', 'index');

    // create
    Route::get('/jobs/create', 'create');

    // store
    Route::post('/jobs', 'store');

    // show
    Route::get('/jobs/{job}', 'show')->name('jobs.show');

    // edit
    Route::get('jobs/{job}/edit' , 'edit');

    // update
    Route::patch('/jobs/{job}', 'update');

    // Delete
    Route::delete('jobs/{job}' , 'delete');
});

Route::resource('jobs' , jobController::class);


