<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Form;


class questionController extends Controller
{

    public function index(){
        $questions = Question::with('forms')->get();
        return $questions;
    }
    public function show($id){
        return Question::find($id);
    }
    public function store(Request $request){
        $question =  Question::create($request->all());
        $form = Form::findOrFail($request->get('form_id'));
        $question->forms()->associate($form);
        $question->save();
        return $question;
        return Question::create($request->all());
    }
    public function update(Request $request,$id){
        $question = Question::findorFail($id);
        $question->update($request->all());

        return $question;
    }
    public function delete(Request $request,$id){
        $question = Question::findorFail($id);
        $question->delete();

        return 204;
    }
}
