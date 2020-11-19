<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
 /* 
     public function __construct()
    {
       $this->middleware('auth:api');
    }
*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function index(){
        return User::all();
    }
    */
    public function index(){
    $users = User::with('orders')->get();
    return $users;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        return User::create([
            'lastName' => $request->lastName,
            'firstName' => $request->firstName,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'type' => $request->type,
            'phoneNumber' => $request->phoneNumber,
            'status' => $request->status,
            'role' => $request->role,
            'birthdate' => $request->birthdate,
            'address' => $request->address,
            'country' => $request->country,
            'state' => $request->state,
                ]);
        //return User::create($request->all());
    }
    public function delete(Request $request,$id){
        $user = User::findorFail($id);
        $user->delete();

        return 204;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
        $employee = User::findorFail($id);
        $employee->update($request->all());

        return $employee;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('isAdmin');
    }
    public function profile()
    {
        return auth('api')->user();
    }
    public function register(Request $request)
    {
       $validdata= $request->validate(
        [
            'name'=> 'required|string|min:2',
            'email'=> 'required|string|max:191|email|unique:users,email,',
            'password'=> 'sometimes|min:6',
        ]);
         $user= User::create($validdata);
         $accessToken = $user->createToken('authtoken')->accessToken;
        return response(['user'=>$user,'access_token'=>$accessToken]);
    }
    public function login()
    {
        
    }
}
