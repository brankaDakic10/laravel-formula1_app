<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
     return view('login.login-create');
    }

     public function store(){
        if(!auth()->attempt(
            request(['email','password'])
        ))
        {
           return back()->withErrors([
               'message'=>'Bad credentals'
           ]);
        }
         return redirect()->route('teams');
       }
      
    
       public function logout()
       {
        auth()->logout();
 
        return redirect()->route('login');
       }
}
