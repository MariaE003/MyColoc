<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;

class MemberController extends Controller
{
    public function mycolocation(){
        $member=Member::where('user_id',auth()->id())->first();
        // dd($mycolocation);
        if (!$member) {
            return back()->with('error', "vous n'etes dans aucune colocation");
        }
        $colocation=$member->colocation;

        // $members=Member::where('colocation_id',$colocation->id)->get();
        // // dd($users);
        // foreach ($members as $member1) {
        //     $users[]=[
        //         'user'=> User::where('id',$member1->user_id)->get(),
        //         'role'=>$role=$member1->role,
        //     ];
        //     dd($users);
        // }
        $totalMember=Member::count();
        $members = $colocation->members()->with('user')->get();
        // dd($members);
        return view('colocattion.detail',compact('colocation','members','totalMember'));
    }
}
