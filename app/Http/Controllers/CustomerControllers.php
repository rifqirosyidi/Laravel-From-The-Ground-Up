<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Company;

class CustomerControllers extends Controller
{
    public function list() {

        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();

		return view('internal.customers',compact('activeCustomers', 'inactiveCustomers', 'companies'));
    }

    public function store() {

    	$data = request()->validate([
    		'name' => 'required|min:3',
    		'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required'
    	]);

        Customer::create($data);

        return back();
    }
}
