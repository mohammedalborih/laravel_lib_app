<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
  public function index()
  {
    $users = User::all();
    return response()->json($users);
	//return 'محمد البريهي يحييكم';
  }

  /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|max:255',
      'email' => 'required'
    ]);

    $newUser = new User([
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'password' => $request->get('password')
    ]);

    $newUser->save();

    return response()->json($newUser);
  }

  /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function show($id)
  {
    $user = User::findOrFail($id);
    return response()->json($user);
  }

  /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function update(Request $request, $id)
  {
    $user = User::findOrFail($id);

    $request->validate([
      'name' => 'required|max:255',
      'email' => 'required',
      'password' => 'password'
    ]);

    $user->name = $request->get('name');
    $user->email = $request->get('email');
    $user->email = $request->get('password');

    $user->save();

    return response()->json($user);
  }

  /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function destroy($id)
  {
    $user = User::findOrFail($id);
    $user->delete();
    return response()->json($user::all());
  }
}
