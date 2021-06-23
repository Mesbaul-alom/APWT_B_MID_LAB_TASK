<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class 	RegistrationController extends Controller

    {
    public function index(Request $req){
       $user = new User;

        $user->username = $req->username;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->type = $req->type;
        $user->password =$req->password;
        $user->image="";
        $user->title="";
        $user->discription="";
        $user->save();
        return redirect('/login');//->route('/login');
    }


    }


