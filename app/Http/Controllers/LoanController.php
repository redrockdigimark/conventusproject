<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoanController extends Controller
{
    //
	
	 public function __construct()
    {
        $this->middleware('auth');    
    }
	
	
	
	
	public function credit()
    {
        //
		return view('loan.credit');
    }
	
	
	
	public function property()
    {
        //
		return view('loan.propertyinfo');
    }
	
	
	public function borrower()
    {
        //
		return view('loan.borrower');
    }
	
	public function entity()
    {
        //
		return view('loan.entity');
    }
	
	
}
