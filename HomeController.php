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
   
        
        // return view('home.index') ->with('name')
        // ;
    }

    public function create(){
        return view('home.create');
    }


public function store(UserRequest $req){

/* $validation = $req->validate([
    'username' => 'required | max:5',
    'password' => 'required | max:8'
]);
    if($validation()->fails()){
        return redirect()->route('home.create')->with('errors',$validation()->errors())->withInput();
    } */
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
/* foreach($userlist as $u){
     if($u['id'] == $id){
         $user = $u;
         break;
     }
} */

    return view('home.edit')->with('user',$user);
}



public function show($id){
    //$i=$id-1;
    $user =User::find($id);
    return view('home.details')->with('user', $user);
}









public function update($id,Request $req){
    //$user = ['id'=> $id, 'name'=>$req->name, 'email'=>$req->email, 'password'=>$req->passwrod  ];
    
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

   /*  public function getUserlist(){

        return  [
           ['id'=>1 , 'name' => 'Gourab', 'email' => 'ads@gmail.com' , 'password' => '123' ],
           ['id'=>2 , 'name' => 'xyz', 'email' => 'asd@gmail.com' , 'password' => '123' ],
           ['id'=>3 , 'name' => 'abc', 'email' => 'ffg@gmail.com' , 'password' => '123' ],
        ];


      
    } */

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
