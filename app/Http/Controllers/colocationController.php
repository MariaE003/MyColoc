<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colocation;
use App\Models\Member;
use Carbon\Carbon;


class colocationController extends Controller
{
    //
    public function create(){
        return view('createColocation');
    }
    public function save(Request $request){
        
        $validation=$request->validate([
            'name'=>'required|string|max:255'
        ]);
        $colo=Colocation::create([
            'name'=>$request->name,
            'owner_id'=>auth()->id(),
        ]);

        Member::create([
        'user_id' => auth()->id(),
        'colocation_id' => $colo->id,
        'role' => 'owner',
        'joined_at' => Carbon::now(),
        'left_at' => null, 
    ]);

        return redirect('/users-disponible');
    }
}
