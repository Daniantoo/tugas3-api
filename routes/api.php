<?php

// routes/api.php
use App\Http\Controllers\MatkulController;

Route::get('/matkuls', [MatkulController::class, 'index']);
Route::post('/matkuls', [MatkulController::class, 'store']);
Route::get('/matkuls/{id}', [MatkulController::class, 'show']);
Route::put('/matkuls/{id}', [MatkulController::class, 'update']);
Route::delete('/matkuls/{id}', [MatkulController::class, 'destroy']);