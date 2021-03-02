<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index(Request $req){

   if($req->session()->has('username')){
    return view('customer.index' );
   }else{
       $req->session()->flash('msg','invalid request');
       return redirect('/login');
   }
   
        
     
    }

    public function create(){
        return view('customer.create');
    }


public function store(UserRequest $req){


   $user = new User();
   $user->username = $req->username;
   $user->fullname     = $req->fullname;
   $user->password = $req->password;
   $user->email    = $req->email;
   $user->address  = $req->addess;
   $user->phone = $req->phone;
   $user->city = $req->city;
   $user->country = $req->country;


   $user->save();
    return redirect('/customer/userlist');
   
}

public function edit($id,Request $req){

$user =User::find($id);


    return view('customer.edit')->with('Payment Type',$user);
}



public function show($id){
  
    $user =User::find($id);
    return view('customer.details')->with('user', $user);
}









public function update($id,Request $req){
  
    $user = User::find($id);
    $user->username = $req->username;
    $user->name     = $req->name;
    $user->password = $req->password;
    $user->email    = $req->email;
    $user->type     = $req->type;
    $user->save();
    
    return redirect('/customer/userlist');

}
public function userlist(){

    $userlist = User::all();
    //$userlist =$this->getUserlist();
    return view('customer.list')->with('userlist',$userlist);
}



    public function delete($id){
        $user = User::find($id);

        return view('customer.delete')->with('user',$user);
    }

    public function destroy($id){

        if(User::destroy($id)){
            return redirect('/customer/userlist');
        } else{
            return redirect('customer/delete/'.$id);
        }
    }

}
