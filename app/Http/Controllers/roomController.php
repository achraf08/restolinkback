<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class roomController extends Controller
{
    public function index(){
        return Room::all();
    }
    public function show($id){
        return Room::find($id);
    }
    public function store(Request $request){
        return room::create($request->all());
    }
    public function update(Request $request,$id){
        $room = Room::findorFail($id);
        $room->update($request->all());

        return $room;
    }
    public function delete(Request $request,$id){
        $room = Room::findorFail($id);
        $room->delete();

        return 204;
    }
}
