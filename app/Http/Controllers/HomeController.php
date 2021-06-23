<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(Request $req){
        // check session or cookie
        //return view('home.index')->with('id', '123');
        // return view('home.index')
        //         ->withId('123')
        //         ->withName('alamin');
        //return view('home.index', ['id'=>123, 'name'=>'alamin']);

       // $id = '890';
       // $name = $req->session()->get('uname');
       // return view('home.index', compact('id', 'name'));
         return view('sellerHome.index');
                
    }

    public function profile(Request $req){
        
         return view('sellerProfile.index');
              
    }

      public function project(Request $req){
        
         return view('sellerHome.project');
              
    }

      public function contest(Request $req){
        
         return view('sellerHome.contest');
              
    }

      public function dashboard(Request $req){
        
         return view('sellerHome.index');
              
    }
     public function protfolio(Request $req){
        
         $users = User::all();
        // redirect()->route('/protfolio')->with('user',$user);
         return view('sellerHome.protfolio')->with('users',$users);
              
    }
     public function p_details( $id){
        
         $user = User::find($id);
        // redirect()->route('/protfolio')->with('user',$user);
        // echo "$id";
        // dd($user);
         return view('sellerHome.p_details')->with('user',$user);
              
    }

    public function store(Request $req){
        
        
        

       $req->validate([
            'image'=>'required|mimes:jpeg,png,jpg',
            'title'=>'required',
            'discription'=>'required'
       ]);
       $newImageName=time().'-'.$req->name.'.'.$req->image->extension();
       $test=$req->image->move(public_path('protfolio_img'),$newImageName);
        $user=new User;
        $user->image=$newImageName;
        $user->title=$req->title;
        $user->discription=$req->discription;
        $user->save();

        //$users = User::all();

         //return redirect->route('/protfolio/submit');
         //$users = User::all();
        return redirect('/protfolio');  

    }


      public function myproject(Request $req){
        
         return view('sellerHome.index');
              
    }

}