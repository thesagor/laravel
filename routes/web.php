<?php

use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe.store');
