<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Colocation;
use App\Models\Member;
use App\Models\Depense;

class DepenseController extends Controller
{
    public function create(){

        $categorie=Categorie::all();
         $member = Member::where('user_id', auth()->id())->first();
        if (!$member) {
            return back()->with('error',"vous n'etes dans aucune colocation");
        }
        $members = Member::where('colocation_id', $member->colocation_id)->with('user')->get();

        return view('depense.addDepense',compact('categorie','members'));
    }


    public function save(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'montant' => 'required|numeric',
            'date' => 'required|date',
            'payer_id' => 'required|exists:users,id',
            'categorie_id' => 'required|exists:categories,id',
        ]);
        
        $member = auth()->user()->member; 
        if(!$member){
            return back()->with('error',"vous n'etes pas dans une colocation");
        }
        Depense::create([
            'title' => $request->title,
            'montant' => $request->montant,
            'date' => $request->date,
            'payer_id' => $request->payer_id,
            'colocation_id' => $member->colocation_id,
            'categorie_id' => $request->categorie_id
        ]);

        return redirect('show.depense');
    }
    // public function show(){
    //     // $
    // }

    public function show(){
    $member = auth()->user()->member;
    if (!$member) {
        return back()->with('error', "Vous n'êtes dans aucune colocation");
    }
    $depenses = Depense::with(['categorie', 'payer'])->where('colocation_id', $member->colocation_id)->latest()->get();

    return view('depense.showDepense', compact('depenses'));
    
    }

    // public function markerPaye($id){
    //     $dep=Depense::find($id);
    //     $dep->is_paid=true;
    //     $dep->save();

    //     $payer=$dep->payer;
    //     $payer->reputation+=1;
    //     $payer->save();
    //     return back()->with('success','depense marque comme paye !');
    // }
}
