<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use DB;

use Validator;

use App\Http\Requests;

class UserController extends Controller
{
 
    public function index()
    {
        //
		$user= DB::table('users')->get();
		
		return view('users.index',compact('user'));
		
    }

    public function create()
    {
        //
		return view('users.create');
    }
	
	
    public function store(Request $request)
    {
		
        //
		User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->name),
        ]);
		
		return redirect('/users/index');
		
    }


}
