<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class reservationController extends Controller
{
    public function index(){
        return Reservation::all();
    }
    public function show($id){
        return Reservation::find($id);
    }
    public function store(Request $request){
        return reservation::create($request->all());
    }
    public function update(Request $request,$id){
        $reservation = Reservation::findorFail($id);
        $reservation->update($request->all());

        return $reservation;
    }
    public function delete(Request $request,$id){
        $reservation = Reservation::findorFail($id);
        $reservation->delete();

        return 204;
    }
}
