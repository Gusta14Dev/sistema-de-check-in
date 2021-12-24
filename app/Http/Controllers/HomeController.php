<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    public function index(){

        
        if(Auth::user()->isAdmin){
            $rooms = Room::with('presences')->paginate(10);
        }else{
            $rooms = Room::where('start', '>=', Date('Y-m-d H:i:S'))->paginate(10);
        }

        $now = Carbon::now();
        return view('dashboard', ['rooms' => $rooms, 'now' => $now]);
    }
}
