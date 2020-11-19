<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;

class orderController extends Controller
{
    public function index(){
        $orders = Order::with('users')->get();
        return $orders;
    }
    public function show($id){
        return Order::find($id);
    }
    public function update(Request $request,$id){
        $order = Order::findorFail($id);
        $order->update($request->all());
        return $order;
    }
    public function delete(Request $request,$id){
        $order = Order::findorFail($id);
        $order->delete();

        return 204;
    }
    public function store(Request $request){
        $order =  Order::create($request->all());
        $user = User::findOrFail($request->get('user_id'));
        $order->users()->associate($user);
        $order->save();
        return $order;
    }
}
