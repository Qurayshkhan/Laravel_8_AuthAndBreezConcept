<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class showController extends Controller
{
    public function show_auth_user(Request $request){
       // return Auth::user();
       // return Auth::user()->name;
        return Auth::user()->id;
        return $request->user()->name;
    }
    public function check_auth_user(){
        if(Auth::check()){
            return "You are Authenticated User";
        }
        return "Unauthenticated User";
    }
    public function report(){
        return view('report');
    }
}
