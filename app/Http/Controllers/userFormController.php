<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserForm;


class userFormController extends Controller
{

    public function index(){
        return UserForm::all();
    }
    public function store(Request $request){
        return UserForm::create($request->all());
    }
}
