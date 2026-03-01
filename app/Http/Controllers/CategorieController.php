<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function show(){
        $categories = Categorie::latest()->get();
        return view('categorie.showCategorie', compact('categories'));
    }
    public function create(){
        return view('categorie.addCategorie');
    }
    public function save(Request $request){
        $request->validate([
            'name'=>'required|string|max:255|',
        ]);
        Categorie::create([
            'name'=>$request->name,
        ]);
        return redirect('show.categorie');
    }
    public function delete($id){
    $categorie = Categorie::findOrFail($id);
    if ($categorie->depenses()->count() > 0) {
        return back()->with('error', 'impossible de supprimer');
    }
    $categorie->delete();
    return redirect('show.categorie');
}
    
}
