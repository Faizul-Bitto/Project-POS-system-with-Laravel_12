<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    public function userRegistration( Request $request ) {

        $request->validate( [
            'name'     => 'required',
            'mobile'   => 'required',
            'email'    => 'required',
            'password' => 'required',
        ] );

        $name     = $request->name;
        $mobile   = $request->mobile;
        $email    = $request->email;
        $password = $request->password;

        $user = User::create( [
            'name'     => $name,
            'mobile'   => $mobile,
            'email'    => $email,
            'password' => Hash::make( $password ),
        ] );

        return response()->json( [
            'status'  => 'success',
            'message' => 'User registered successfully',
            'user'    => $user,
        ], 201 );
    }

    public function userLogin( Request $request ) {

    }

    public function userLogout( Request $request ) {

    }

    public function sendOTP( Request $request ) {

    }

    public function verifyOTP( Request $request ) {

    }

    public function resetPassword( Request $request ) {

    }

    public function userProfileDetails( Request $request ) {

    }

    public function userProfileUpdate( Request $request ) {

    }
}
