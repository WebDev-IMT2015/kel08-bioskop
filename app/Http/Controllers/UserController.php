<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$user = User::all();
    	return view('user')->with('user', $user);
    }

    public function insertUser(Request $request){
    	$user = new User;
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->type = $request->input('type');
    	$user->password = bcrypt($request->input('password'));
    	$user->status = 1;
    	$user->save();

    	return redirect('user');
    }

    public function edit($id){
    	$user = User::all();
    	$user_edit = User::find($id);
    	return view('user')
    	->with('user', $user)
    	->with('user_edit', $user_edit);
    }

    public function update(Request $request){
    	$user = User::find($request->input('id'));
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->type = $request->input('type');
    	$user->password = bcrypt($request->input('password'));
    	$user->save();

    	return redirect('user');
    }

    public function destroy($id){
    	$user = User::find($id);
    	$user->status = 0;
    	$film->save();

    	return redirect('user');
    }
}
