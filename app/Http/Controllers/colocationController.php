<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colocation;
use App\Models\Member;
use Carbon\Carbon;


class colocationController extends Controller
{
    public function create(){
        return view('createColocation');
    }
    public function save(Request $request){
        
        $validation=$request->validate([
            'name'=>'required|string|max:255'
        ]);
        
        if(Colocation::where('status','active')->where('owner_id',auth()->id())->exists()){
            return back()->with('error','vous avez deja creer une colocation');
        }
        if (Member::where('user_id', auth()->id())
            ->whereNull('left_at')
            ->whereHas('colocation', function($q) {
                $q->where('status', 'active');
            })->exists()) {
                return back()->with('error', "vous etes deja membre d'une colocation active");
        }
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

        return redirect('/mycolocation');
    }

    public function cancelColocation($id){

        $colocation=Colocation::find($id);
        if ($colocation->owner_id !== auth()->id()) {
            abort(403);
        }

        $colocation->status="cancelled";
        $colocation->save();

        return redirect("/");
    }
}
