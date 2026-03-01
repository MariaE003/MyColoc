<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Depense;
use App\Models\Member;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'depense_id' => 'required',
            'receiver_id' => 'required',
            'montant' => 'required|numeric',
        ]);

        $depense = Depense::find($request->depense_id);
        $members = Member::where('colocation_id', $depense->colocation_id)->get();
        $part    = $depense->montant / $members->count();

        $dejaPaye = Payment::where('depense_id', $request->depense_id)
            ->where('payer_id', auth()->id())
            ->sum('montant');

        $reste = $part - $dejaPaye;

        if ($reste <= 0.01) {
            return back()->with('info', 'vous avez deja rembourse cette depense.');
        }
        $montant = min($request->montant, $reste);
        Payment::create([
            'payer_id'    => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'depense_id'  => $request->depense_id,
            'montant'     => $montant,
            'status'      => true,
        ]);

        return back()->with('success', 'remboursement done');
    }
}