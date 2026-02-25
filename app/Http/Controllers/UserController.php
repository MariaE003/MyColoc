<?php

namespace App\Http\Controllers;
use App\Models\User;
class UserController
{
    //
    public function usersConnecter(){
        // colocation du user connecter (owner)
        $users=User::where('id','!=',auth()->id())->get();
        // orwhere('id','!=','')
        return view('dashboardO',compact('users'));
    } 

}
