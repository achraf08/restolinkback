<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;


class responseController extends Controller
{

    public function index(){
        return Response::all();
    }
    public function show($id){
        return Response::find($id);
    }
    public function store(Request $request){
        return Response::create($request->all());
    }
    public function update(Request $request,$id){
        $response = Response::findorFail($id);
        $response->update($request->all());

        return $response;
    }
    public function delete(Request $request,$id){
        $response = Response::findorFail($id);
        $response->delete();

        return 204;
    }
}
