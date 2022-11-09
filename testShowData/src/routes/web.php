<?php

use Illuminate\Support\Facades\Route;
use Test\Show\Http\Controllers\ShowDataController;

Route::get('show', [ShowDataController::class, 'index']);