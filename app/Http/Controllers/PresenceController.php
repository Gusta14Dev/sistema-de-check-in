<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresenceController extends Controller
{
    public function checkIn($id){
        try {
            Presence::create([
                'user_id' => Auth::user()->id,
                'room_id' => $id,
            ]);

            return redirect()->back()
                ->with('success', 'Confirmado a presença');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Ocorreu um erro na hora de confirmar sua presença, tente novamente!');
        }
    }
    
    public function cancelCheckIn($id){
        $presence = Presence::where('room_id', $id)->where('user_id', Auth::user()->id)->first();

        try {
            $presence->delete();
            return redirect()->back()
                ->with('success', 'Presença na aula cancelada');
        } catch (\Exception $e) {
            return redirect()->route('rooms')
                ->with('error', 'Ocorreu um erro na hora de cancelar, tente novamente!');
        }
        return view('rooms.rooms');
    }
}
