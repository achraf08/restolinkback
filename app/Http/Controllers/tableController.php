<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;
use App\Room;


class tableController extends Controller
{

    public function index(Request $request){
        $tables = Table::with('rooms')->get();
        return $tables;
    }
    public function list(Request $request){
        $tables = Table::with('rooms')->get()
        ->where('rooms._id = tables.rooms_id');
        
        return $tables;
    }
    public function show($id){
        return Table::find($id);
    }
    public function store(Request $request){
        $table =  Table::create($request->all());
        $room = Room::findOrFail($request->get('room_id'));
        $table->rooms()->associate($room);
        $table->save();
        return $table;
    }
    public function update(Request $request,$id){
        $table = Table::findorFail($id);
        $table->update($request->all());

        return $table;
    }
    public function delete(Request $request,$id){
        $table = Table::findorFail($id);
        $table->delete();

        return 204;
    }
}
