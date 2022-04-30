<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function register(Request $req){
        $user= new User;
       
        $user->customer_id= $req->input('customer_id');
        $user->name= $req->input('name');
        $user->dob= $req->input('dob');
        $user->phone= $req->input('phone');
        $user->email= $req->input('email');
        $user->password= Hash::make($req->input('password'));
        $user->save();

        return $user;
    }
}
