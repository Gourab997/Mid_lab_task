<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;



class LoginController extends Controller
{
 public function index(){
return view('login.index');

    }

  public  function verify(Request $req){

     /* $user =User::where('password', $req->password)
                 ->where('username',$req->username)
              ->get(); */ 
     // return view('login.test');

     $user = DB::table('users') 
     -> where('password', $req->password)
     ->where('username',$req->username)
     ->get();
       if($req->username == "" || $req->password == ""){
          $req->session()->flash('msg','Invalid');
          return redirect('/login');
       }elseif(count($user) > 0 ){
      
     
    if ($req->usertype == "admin"){

     $req->session()->put('username',$req->username);
     return redirect('/home');
    }elseif($req->usertype == "accountant"){

      $req->session()->put('username',$req->username);
      return redirect('/home');
    }else{

      $req->session()->put('username',$req->username);
      return redirect('/home');
    }



            } else{

               $req->session()->flash('msg','Invalid');
                 return redirect('/login');

            }

}
}
