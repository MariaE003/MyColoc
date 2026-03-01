<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Invitation;
use App\Models\Member;
use App\Models\Colocation;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitationMail;



class InvitationController extends Controller
{
    public function envoyerInvitation($id_receiver){
        $colocation=Colocation::where('owner_id',auth()->id())->where('status','active')->first();
        if(!$colocation){
            return back()->with('error','aucune colocation trouver');
        }
        $token=Str::random(40);
        Invitation::create([
            'colocation_id' => $colocation->id,
            'sender_id' => auth()->id(),
            'receiver_id' => $id_receiver,
            'token' =>$token,
        ]);

        $user = User::find($id_receiver);
        Mail::to($user->email)->send(new InvitationMail($token,$colocation->name));

        return back()->with('success','invitation envoye par email');
    }
    
    public function accepterInvitation($token){
        $invitation = Invitation::where('token', $token)->first();
        if (!$invitation) {
            abort(404);
        }
        if ($invitation->receiver_id != auth()->id()) {
            abort(403);
        }

        $userId = auth()->id();

        // check si user dans un cloc active
        $alreadyInColo = Member::where('user_id', $userId)->whereNull('left_at') 
            ->whereHas('colocation', function($q){
                $q->where('status', 'active');
            })
            ->exists();

        if ($alreadyInColo) {
            return redirect('/mycolocation')->with('error','vous etes deja dans une colocation');
        }
        // virifier si deja owner
        if(Colocation::where('status','active')->where('owner_id',$userId)->exists()){
            return redirect('/dashboard')->with('error','vous etes deja owner dune colocation');
        }
        Member::create([
            'user_id' => $userId,
            'colocation_id' => $invitation->colocation_id,
            'role' => 'member',
            'joined_at' => now(),
            'left_at' => null,
        ]);
        $invitation->update(['status' => 'accepter']);
        return redirect('/mycolocation')->with('success', 'vous avez rejoint la colocation ');
    }
    public function refuserInvitation($token){
        $invitation=Invitation::where('token',$token)->first();
        if(!$invitation){
            abort(404);
        }
        if($invitation->receiver_id != auth()->id()){
            abort(403);
        }   
        $invitation->update(['status'=>'refuser']);
        return redirect('home');
    }

}
