<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kanban', function () {
    return Inertia::render('Kanban'); // Nombre exacto del archivo Kanban.vue
});
