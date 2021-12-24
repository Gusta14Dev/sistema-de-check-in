<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'start',
        'final',
        'name',
        'teacher',
        'max_students',
    ];

    protected $casts = [
        'start' => 'datetime',
        'final' => 'datetime',
        'max_students' => 'integer',
    ];

    public function getPresenceUserOfRoom($user_id, $room_id){
        $presence = Presence::where('user_id', $user_id)->where('room_id', $room_id)->get();

        if (count($presence) == 0) {
            return true;
        }

        return false;
    }

    public function presences(){
        return $this->hasMany(Presence::class);
    }
}
