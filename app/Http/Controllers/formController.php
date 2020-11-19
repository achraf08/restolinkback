<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class formController extends Controller
{
    public function index(){
        return Form::all();
    }
    public function show($id){
        return Form::find($id);
    }
    public function store(Request $request){
        return Form::create($request->all());
    }
    public function update(Request $request,$id){
        $form = Form::findorFail($id);
        $form->update($request->all());

        return $form;
    }
    public function delete(Request $request,$id){
        $form = Form::findorFail($id);
        $form->delete();

        return 204;
    }
}
