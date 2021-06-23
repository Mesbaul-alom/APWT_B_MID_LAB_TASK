<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\Models\user;


class LoginController extends Controller
{
    public function index(){
        return view('login.index');

    }

      public function regverify(){
        return redirect('/login');
    
    }
public function register(){
        return view('registration.signup');
    }
    public function verify(userRequest $req){
       
    	$validation = Validator::make($req->all(), [
    		'email' => 'required|max:20',
    		'password'=> 'required|min:8|max20'
    	]);
 $user = User::where('email', $req->email)
            ->where('password', $req->password)
            ->first();

        if($user){
            $req->session()->put('email', $req->email);
            return redirect('/sellerHome');
        }else{
            $req->session()->flash('msg', 'invaild email or password');
            return redirect('/login');
        }
    }
}