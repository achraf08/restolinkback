<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResponsesList;

class responsesController extends Controller
{
    public function index(){
        return ResponsesList::all();
    }
    public function show($id){
        return ResponsesList::find($id);
    }
    public function store(Request $request){
        return ResponsesList::create($request->all());
    }
}
