<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use App\Models\Colocation;
use App\Models\Payment;
use App\Models\Depense;

class MemberController extends Controller
{
    public function mycolocation(){
        $userId = auth()->id();

        $member = Member::where('user_id', $userId)->whereNull('left_at')
            ->whereHas('colocation', function ($q) {
                $q->where('status', 'active');
            })->first();
        if (!$member) {
            return redirect('/dashboard')
                ->with('error', "vous n'etes dans aucune colocation active");
        }
        $colocation = $member->colocation;
        $members = $colocation->members()->whereNull('left_at')->with('user')->get();

        $totalMember = $members->count();
        $users = User::where('id', '!=', $userId)->get();
        

        return view('colocation.detail', compact('colocation', 'members', 'totalMember', 'users'));
    }

    public function leaveColocation(){
        $userId = auth()->id();
        $member = Member::where('user_id', $userId)->whereNull('left_at')
            ->whereHas('colocation', function ($q) {
                $q->where('status', 'active');
            })->first();

        if (!$member) {
            return back()->with('error', "vous n'etes dans aucune colocation active");
        }

        if ($member->role === 'owner') {
            return back()->with('error', "owner ne peut pas quitter la colocation.");
        }
        $colocationId = $member->colocation_id;
        $depenses = Depense::with('payments')->where('colocation_id', $colocationId)->where('is_paid', false)
            ->get();

        $membersCount = Member::where('colocation_id', $colocationId)->whereNull('left_at')->count();

        $hasDebt = false;
        foreach ($depenses as $depense) {
            if ($userId == $depense->payer_id) continue; 
            $part = $depense->montant / $membersCount;

            $paid = $depense->payments
                ->where('payer_id', $userId)
                ->sum('montant');

            if ($paid < $part - 0.01) {
                $hasDebt = true;
                break;
            }
        }

        $user = User::find($userId);

        if ($hasDebt) {
            $user->reputation -= 1;
            $message = "Vous avez quitté avec une dette (-1 réputation).";
        } else {
            $user->reputation += 1;
            $message = "Vous avez quitté sans dette (+1 réputation).";
        }
        $user->save();
        $member->update(['left_at' => now()]);
        return redirect('/dashboard')->with('success', $message);
    }

    public function removeMember($colocationId, $userId){
        $colocation = Colocation::find($colocationId);

        if (!$colocation) {
            return back()->with('error', "colocation introuvable");
        }
        if ($colocation->owner_id != auth()->id()) {
            abort(403, "vous n'avez pas les droits pour retirer ce membre");
        }
        $member = Member::where('colocation_id', $colocation->id)->where('user_id', $userId)->first();
        if (!$member) {
            return back()->with('error', "ce membre n'existe pas dans cette colocation");
        }
        $depenseIds = $colocation->depenses()->pluck('id');
        $mony = Payment::where('payer_id', $member->user_id)->whereIn('depense_id', $depenseIds)->where('status', false)->get();
        // dette => owner
        foreach ($mony as $payment) {
            $payment->update([
                'payer_id' => $colocation->owner_id
            ]);
        }
        $member->delete();

        return back();
    }
}
