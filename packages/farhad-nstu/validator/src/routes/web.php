<?php

use FarhadNstu\Validator\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/inspire', [Controllers\ValidatorController::class, '__invoke']);
