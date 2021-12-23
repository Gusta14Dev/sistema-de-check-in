<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return view('rooms.rooms');
    }

    public function create(){
        return view('rooms.add');
    }

    public function store(){
        return view('rooms.rooms');
    }

    public function edit(){
        return view('rooms.rooms');
    }

    public function update(){
        return view('rooms.rooms');
    }

    public function delete(){
        return view('rooms.rooms');
    }
}
