<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        //return User::where(['email'=>$req->email])->first(); 
        //return $req->input();
        $user=User::where(['email'=>$req->email])->first(); 
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or Password is not match";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        } 
    }
}
