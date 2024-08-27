<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;

Route::get('/', function () {
    return view('home');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/tambah-project', function () {
    return view('tambah');
});

Route::post('/tambah-project', [projectController::class, 'tambah_project']);
