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
        $colocation=Colocation::where('owner_id',auth()->id())->first();

        if(!$colocation){
            return back()->with('error','aucune colocation trouver');
        }

        $token=Str::random(40);
        Invitation::create([
        'colocation_id' => $colocation->id,
        'sender_id' => auth()->id(),
        'receiver_id' => $id_receiver,
        'token' =>$token ,
        ]);

        $user = User::find($id_receiver);
        Mail::to($user->email)->send(new InvitationMail($token,$colocation->name));

        return back()->with('success','invitation envoye par email');
    }
    
    public function accepterInvitation($token){
        $invitation=Invitation::where('token',$token)->first();
        if(!$invitation){
            abort(404);
        }
        if($invitation->receiver_id != auth()->id()){
            abort(403);
        }

        // virifier si user est deja dans une autre colocation ou non
        if(Member::where('user_id',auth()->id())->exists()){
            return redirect('/dashboard')->with('error','vous êtes deja dans une colocation');
        }
        // dd($invitation->status);        

        Member::create([
            'user_id'=>$invitation->receiver_id,
            'colocation_id'=>$invitation->colocation_id,
            'role'=>'member',
            'joined_at'=>Carbon::now(),
            // 'left_at'=>,
        ]);
        $invitation->update(['status'=>'accepter']);
        return redirect('/dashboard');
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
        return redirect('/dashboard');
    }

}
