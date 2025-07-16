<?php

use App\Http\Controllers\BotController;
use Illuminate\Support\Facades\Route;

Route::post("/webhook", BotController::class);
