<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function register(Request $request)
    {
        // echo '<pre>';
        // print_r($request->all());

        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'min:8|required',
            'confirm_password'=>'required',

        ]);
    }
}
