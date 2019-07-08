<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
class restaurantController extends Controller
{
    public function index(){
        return Restaurant::all();
    }
    public function show($id){
        return Restaurant::find($id);
    }
    public function store(Request $request){
        return Restaurant::create($request->all());
    }
    public function update(Request $request,$id){
        $restaurant = Restaurant::findorFail($id);
        $restaurant->update($request->all());

        return $restaurant;
    }
    public function delete(Request $request,$id){
        $restaurant = Restaurant::findorFail($id);
        $restaurant->delete();

        return 204;
    }
}
