<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Colocation;
use App\Models\Member;
use App\Models\Depense;
use App\Models\Payment;

class DepenseController extends Controller
{
    private function getActiveMember(){
        return Member::where('user_id', auth()->id())
            ->whereNull('left_at')
            ->whereHas('colocation', function ($q) {
                $q->where('status', 'active');
            })
            ->first();
    }
    public function create(){
        $categorie = Categorie::all();
        $member = $this->getActiveMember();
        if (!$member) {
            return back()->with('error', "vous n'etes dans aucune colocation active");
        }
        $members = $member->colocation->members()->whereNull('left_at')->with('user')->get();
        return view('depense.addDepense', compact('categorie', 'members'));
    }
    public function save(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'montant' => 'required|numeric',
            'date' => 'required|date',
            'payer_id' => 'required',
            'categorie_id' => 'required',
        ]);

        $member = $this->getActiveMember();

        if (!$member) {
            return back()->with('error', "vous n'etes pas dans une colocation active");
        }

        Depense::create([
            'title' => $request->title,
            'montant' => $request->montant,
            'date' => $request->date,
            'payer_id' => $request->payer_id,
            'colocation_id' => $member->colocation_id,
            'categorie_id' => $request->categorie_id
        ]);

        return redirect()->route('show.depense');
    }

    public function markerPaye($id){
        $depense = Depense::findOrFail($id);
        if (auth()->id() != $depense->payer_id) {
            return back()->with('error', 'seul le payeur peut confirmer.');
        }
        $depense->is_paid = true;
        $depense->save();
        return back()->with('success', 'dipense marque  payee');
    }

    public function delete($id){
        $depense=Depense::find($id);
        if(auth()->id() != $depense->payer_id && auth()->id() != $depense->colocation->owner_id){
            return back()->with('error',"vous n'avez pas le droit du supprimer la depense");
        }
        $depense->payments()->delete();
        $depense->delete();
        return redirect('show.depense');
    }

    public function show(Request $request){
        $member = $this->getActiveMember();

        if (!$member) {
            return back()->with('error', "vous n'etes dans aucune colocation active");
        }
        $colocation = $member->colocation;
        $members = $colocation->members()->whereNull('left_at')->with('user')->get();

        $query = Depense::with(['payer', 'payments', 'categorie'])->where('colocation_id', $colocation->id);

        if ($request->month) {
            $query->whereMonth('date', date('m', strtotime($request->month)))
                ->whereYear('date',  date('Y', strtotime($request->month)));
        }
        $depenses = $query->get();
        
        $balances = [];
        foreach ($members as $m) {
            $balances[$m->user->id] = 0;
        }

        foreach ($depenses as $d) {
            if (!isset($balances[$d->payer_id])) continue;

            $part = $d->montant / count($members);

            foreach ($members as $m) {
                if ($m->user->id == $d->payer_id) continue;

                if (isset($balances[$m->user->id])) {
                    $balances[$m->user->id] -= $part;
                }
                if (isset($balances[$d->payer_id])) {
                    $balances[$d->payer_id] += $part;
                }
            }

            foreach ($d->payments as $payment) {
                if (isset($balances[$payment->payer_id])) {
                    $balances[$payment->payer_id] += $payment->montant;
                }
                if (isset($balances[$payment->receiver_id])) {
                    $balances[$payment->receiver_id] -= $payment->montant;
                }
            }
        }
        return view('depense.showDepense', compact('depenses', 'members', 'balances', 'colocation'));
}



}