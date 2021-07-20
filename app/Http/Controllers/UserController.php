<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req){
        $user = User::where(["email"=>$req->email])->first();
        if(!$user|| !Hash::check($req->password,$user->password)){
            return "Username or password is not matched";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function register(Request $req){
        $user = new User;
        $user->name = $req->username;
        $user->email = $req->useremail;
        $user->password = Hash::make($req->userpassword);
        $user->save();
        return redirect("/login");

    }   

}
  