<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::POST( '/user-registration', [UserController::class, 'userRegistration'] )->name( 'userRegistration' );
Route::POST( '/user-login', [UserController::class, 'userLogin'] )->name( 'userLogin' );
