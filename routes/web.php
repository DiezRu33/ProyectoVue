<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;

Route::get('/', function(){return view('index');});

Route::middleware('auth:sanctum')->group(function (){

    Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    Route::resource('notes', App\Http\Controllers\NoteController::class);
});