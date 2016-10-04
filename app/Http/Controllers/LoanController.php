<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoanController extends Controller
{
    //
	
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
	
	public function borroweremployment()
    {
        //
		return view('loan.borroweremployment');
    }
	
	public function schedule()
    {
        //
		return view('loan.schedule');
    }
	
	public function signers()
    {
        //
		return view('loan.signers');
    }
	
	public function acknowledgement()
    {
        //
		return view('loan.acknowledgement');
    }
	
}
