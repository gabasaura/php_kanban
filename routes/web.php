<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanbanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/kanban', [KanbanController::class, 'index'])->name('kanban.index');

