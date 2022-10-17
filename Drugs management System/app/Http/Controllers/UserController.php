<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
  
public function login(){
        return view('User/login'); }

public function locked(){
    return view('User/Lock');}

public function create(){
    return view('User/login');}


    public function store20(Request $request){
           $request->validate([ 
            'password' => 'required|min:3|max:20', ]);
           $userpass=User::where('password','=',$request->password)->first();
           if($userpass){  
           return view('index');
           }else{
               $request->session()->flash('failed','Incorrect Password');
            return redirect()->back();
           } }
    
        public function reload(){
             return view('index');
        }




    public function store(Request $request){
           $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3|max:20',
          ]);
           $username=User::where('email','=',$request->email)->first();
           $userpass=User::where('password','=',$request->password)->first();
           if($username && $userpass){
                    return view('index');
           }else{
               $request->session()->flash('failed','Incorrect Username or Password');
            return redirect()->back();
           } }
    
        public function reload1(){
             return view('index'); }



}

