<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get( '/user-registration', [UserController::class, 'userRegistration'] )->name( 'userRegistration' );
