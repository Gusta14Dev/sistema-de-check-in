<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function index(){
        $rooms = Room::paginate(10);
        return view('rooms.rooms', ['rooms' => $rooms]);
    }

    public function show($id){
        $room = Room::find($id);
        $presences = Presence::with('user')->where('room_id', $id)->paginate(10);
        return view('rooms.show', ['room' => $room, 'presences' => $presences]);
    }

    public function showRoomCheckIn(){
        $presences = Presence::with('room')->paginate(10);
        $now = Carbon::now();
        return view('rooms.checkin', ['presences' => $presences, 'now' => $now]);
    }

    public function showRoomWeek(){
        $rooms = Room::paginate(10);
        return view('rooms.week', ['rooms' => $rooms]);
    }

    public function create(){
        return view('rooms.add');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'teacher' => 'required|string|max:100',
            'max_students' => 'required|numeric|integer|digits_between:1,3',
            'date_initial' => 'required|different:date_final',
            'date_final' => 'required|after:date_initial|different:date_initial',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        
        $validator_rooms = Room::where(function ($query) use($request) {
                                    $query->where('start', '<=', $request->date_initial)
                                    ->where('final', '>', $request->date_initial);
                                 })
                                 ->orWhere(function ($query) use($request) {
                                    $query->where('start', '<', $request->date_final)
                                    ->where('final', '>=', $request->date_final);
                                 })
                                 ->get();

        if(count($validator_rooms) != 0){
            $text = 'Já existe uma aula marcada para esse horario!<br>Horario(s) exitente(s):<br>';
            foreach ($validator_rooms as $room) {
                $text = $text.$room->start.' até '.$room->final.'<br>';
            }

            return redirect()->back()
                ->with('error', $text)
                ->withInput();
        }

        try {
            Room::create([
                'name' => $request->name,
                'teacher' => $request->teacher,
                'max_students' => $request->max_students,
                'start' => $request->date_initial,
                'final' => $request->date_final,
            ]);

            return redirect()->route('rooms')
                ->with('success', 'Criado com sucesso');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Ocorreu um erro na hora da criação, tente novamente!')
                ->withInput();
        }
    }

    public function edit($id){
        $room = Room::find($id);
        return view('rooms.edit', ['room' => $room]);
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'teacher' => 'required|string|max:100',
            'max_students' => 'required|numeric|integer|digits_between:1,3',
            'date_initial' => 'required|different:date_final',
            'date_final' => 'required|after:date_initial|different:date_initial',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        
        $validator_rooms = Room::where(function ($query) use($request) {
                                    $query->where('start', '<=', $request->date_initial)
                                    ->where('final', '>', $request->date_initial);
                                 })
                                 ->orWhere(function ($query) use($request) {
                                    $query->where('start', '<', $request->date_final)
                                    ->where('final', '>=', $request->date_final);
                                 })
                                 ->get();

        $validator_rooms = $validator_rooms->where('id', '!=', $request->id);

        if(count($validator_rooms) != 0){
            $text = 'Já existe uma aula marcada para esse horario!<br>Horario(s) exitente(s):<br>';
            foreach ($validator_rooms as $room) {
                $text = $text.$room->start.' até '.$room->final.'<br>';
            }

            return redirect()->back()
                ->with('error', $text)
                ->withInput();
        }

        try {
            $room = Room::find($request->id);
            $room->name = $request->name;
            $room->teacher = $request->teacher;
            $room->max_students = $request->max_students;
            $room->start = $request->date_initial;
            $room->final = $request->date_final;
            $room->save();

            return redirect()->route('rooms')
                ->with('success', 'Editado com sucesso');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Ocorreu um erro na hora de editar, tente novamente!')
                ->withInput();
        }
    }

    public function delete($id){
        $room = Room::find($id);

        try {
            $room->delete();
            return redirect()->route('rooms')
                ->with('success', 'Deletado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('rooms')
                ->with('error', 'Ocorreu um erro na hora de deletar, tente novamente!');
        }
        return view('rooms.rooms');
    }
}
