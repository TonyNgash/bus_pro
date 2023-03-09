<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    public function index($user){
        return $user." hello from controller";
    }

    public function user(){
        $data = ['sam','pete','ken','ben'];

        return view("user",['users'=>$data]);
    }
}
