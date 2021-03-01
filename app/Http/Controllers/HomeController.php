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
    return view('home.index' );
   }else{
       $req->session()->flash('msg','invalid request');
       return redirect('/login');
   }
   
        
     
    }

    public function create(){
        return view('home.create');
    }


public function store(UserRequest $req){


   $user = new User();
   $user->username = $req->username;
   $user->name     = $req->name;
   $user->password = $req->password;
   $user->email    = $req->email;
   $user->type     = $req->type;

   $user->save();
    return redirect('/home/userlist');
   
}

public function edit($id,Request $req){

$user =User::find($id);


    return view('home.edit')->with('user',$user);
}



public function show($id){
  
    $user =User::find($id);
    return view('home.details')->with('user', $user);
}









public function update($id,Request $req){
  
    $user = User::find($id);
    $user->username = $req->username;
    $user->name     = $req->name;
    $user->password = $req->password;
    $user->email    = $req->email;
    $user->type     = $req->type;
    $user->save();
    
    return redirect('/home/userlist');

}
public function userlist(){

    $userlist = User::all();
    //$userlist =$this->getUserlist();
    return view('home.list')->with('userlist',$userlist);
}



    public function delete($id){
        $user = User::find($id);

        return view('home.delete')->with('user',$user);
    }

    public function destroy($id){

        if(User::destroy($id)){
            return redirect('/home/userlist');
        } else{
            return redirect('home/delete/'.$id);
        }
    }

}
