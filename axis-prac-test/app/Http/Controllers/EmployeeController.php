<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function login(Request $request)
    {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator);
        } else {
            $userdata = array(
                'email'     => $request->email,
                'password'  => $request->password
            );

            if (Auth::attempt($userdata)) {
                return Redirect::to('admin');
            } else {
                // validation not successful, send back to form
                return Redirect::to('login');
            }
        }
    }

    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('login'); // redirect the user to the login screen
    }
}
