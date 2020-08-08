<?php

use Illuminate\Support\Facades\Route;

/*
 * Pages
 */
Route::view('/', 'about')->name('about');
Route::view('/projects', 'projects')->name('projects');
Route::view('/now', 'now')->name('now');
Route::view('/uses', 'uses')->name('uses');

/*
 * Resume
 */
Route::redirect('/resume.pdf', '/resume');

Route::get('/resume', function () {
    return response()->file(storage_path('app/resume.pdf'), [
        'Content-Disposition' => 'inline; filename="ZakNesler_Resume_2020-05.pdf"'
    ]);
})->name('resume');
