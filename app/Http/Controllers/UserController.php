<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Colocation;
class UserController
{
    //
    public function usersConnecter(){
        $users=User::where('id','!=',auth()->id())->get();
        return view('colocation.detail',compact('users'));
    }
    public function dashboard(){
        $usersCount=User::count();
        $colocationCount=Colocation::count();
        $users = User::with('member.colocation')->where('id','!=',auth()->id())->get();
        return view('admin', compact('users','usersCount','colocationCount'));
    }

}
