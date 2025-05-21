<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::POST( '/user-registration', [UserController::class, 'userRegistration'] )->name( 'userRegistration' );
Route::POST( '/user-login', [UserController::class, 'userLogin'] )->name( 'userLogin' );
Route::POST( '/user-logout', [UserController::class, 'userLogout'] )->name( 'userLogout' );
