<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;


Route::get('/', [FrontController::class, 'home'])->name('home');

Route::as('front.')->middleware('verifySession')->group(function () {
    Route::get('/course-details', [FrontController::class, 'courseDetails'])->name('course.details');
});

Route::get('/a', function (){
    \Illuminate\Support\Facades\Session::put('name', 'bitm');
});
