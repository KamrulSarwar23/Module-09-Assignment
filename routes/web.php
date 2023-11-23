<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;

Route::get('/', [AssignmentController::class, 'home'])->name('home.page');
Route::get('about', [AssignmentController::class, 'about'])->name('about.page');
Route::get('contact', [AssignmentController::class, 'contact'])->name('contact.page');
Route::post('contact/submit', [AssignmentController::class, 'contactSubmit'])->name('contact.submit');
Route::get('project', [AssignmentController::class, 'project'])->name('project.page');