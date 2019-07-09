<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;

class tableController extends Controller
{
    public function index(){
        return Table::all();
    }
    public function show($id){
        return Table::find($id);
    }
    public function store(Request $request){
        return table::create($request->all());
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
