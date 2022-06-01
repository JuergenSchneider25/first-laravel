<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/messages', function () {
    return view('messages');
});
Route::get('/messages', [MessageController::class, 'showAll']);

Route::post('/create', [MessageController::class, 'create']);

Route::get('/message/{id}', [MessageController::class, 'details']);

Route::delete('/message/{id}', [MessageController::class, 'delete']);
