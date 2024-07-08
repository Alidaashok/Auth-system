<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authuser;
use Hash;
use Session;
use Illuminate\Support\Facades\Facade;

class UserAuthController extends Controller
{
    public function login(){
       return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request){
       $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:authusers',
        'password'=>'required|min:4|max:10'
       ]);
       $user= new Authuser();
       $user->name=$request->name;
       $user->email=$request->email;
       $user->password= Hash::make($request->password);
       $res=$user->save();
       if($res){
        return back()->with('success','you have registered successfully');
       }else{
        return back()->with('fail','something went wrong');
       }
    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:10'
           ]);
           $user=Authuser::where('email',$request->email)->first();
           if ($user){
              if(Hash::check($request->password,$user->password)){
                 $request->session()->put('loginId',$user->id);
                 return redirect('dashboard');
              }else{
                return back()->with('fail','This password is not registered.');
              }
           }else{
              return back()->with('fail','This email is not registered.');
           }
    }
    public function dashboard(Request $request){
        $data=array();
        if(Session::has('loginId')){
            $data=Authuser::where('id','=',Session::get('loginId'))->first();
        }
        return view('auth.dashboard',compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        } 
    }
}
