<?php

namespace App\Http\Controllers;
use App\Models\User;
class UserController
{
    //
    public function usersConnecter(){
        $users=User::where('id','!=',auth()->id())->get();
        return view('dashboardO',compact('users'));
    } 

}
