<?php

use App\Http\Controllers\jobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\jobPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Support\Arr;

Route::get('test', function () {
    $job = Job::first();
    TranslateJob::dispatch($job);
    return 'Done';
});
// views
Route::view('/', 'welcome')->name('home');
Route::view('/about', 'about');
Route::view('/contact' , 'contact');

// Register
Route::get('/register' , [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register' , [RegisteredUserController::class, 'store'])->name('register.store');

// login
Route::get('/login' , [SessionController::class, 'create'])->name('login');
Route::post('/login' , [SessionController::class, 'store'])->name('login.store');
Route::post('/logout' , [SessionController::class, 'destroy'])->name('login.destroy');

Route::controller(jobController::class)->group(function () {
    // index
    Route::get('/jobs', 'index');

    // create
    Route::get('/jobs/create', 'create')->middleware('auth')->name('jobs.create');

    // store
    Route::post('/jobs', 'store')->middleware('auth')->name('jobs.store');

    // show
    Route::get('/jobs/{job}', 'show')->name('jobs.show');

    // edit
    Route::get('/jobs/{job}/edit', 'edit')
        ->middleware('auth')
        ->can('edit', 'job');


    // update
    Route::patch('/jobs/{job}', 'update')->middleware('auth')->can('edit', 'job');

    // Delete
    Route::delete('/jobs/{job}' , 'destroy')->middleware('auth')->name('jobs.destroy');
});

//Route::resource('jobs', JobController::class)->middleware('auth');





