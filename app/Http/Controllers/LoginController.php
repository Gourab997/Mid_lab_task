<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Requests\LoginRequest;



class LoginController extends Controller
{
 public function index(){
return view('login.index');

    }

  public  function verify(LoginRequest $req){



     $user = DB::table('users') 
     -> where('password', $req->password)
     ->where('email',$req->email)
     ->get();
       if($req->email == "" || $req->email == ""){
          $req->session()->flash('msg','Invalid');
          return redirect('/login');
       }elseif(count($user) > 0 ){
      
     
    if ($req->usertype == "admin"){

     $req->session()->put('email',$req->email);
     return redirect('/admin');
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
