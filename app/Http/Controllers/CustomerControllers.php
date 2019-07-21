<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Company;

class CustomerControllers extends Controller
{
    public function index() {

        $customers = Customer::all();

		return view('customers.index',compact('customers'));
    }

    public function create(Customer $customer) {

        $companies = Company::all();

        return view('customers.create',compact('companies', 'customer'));

    }

    public function store() {

    	$data = request()->validate([
    		'name' => 'required|min:3',
    		'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required'
    	]);

        Customer::create($data);

        return redirect('customers');
    }

    public function show(Customer $customer) {

        return view('customers.show', compact('customer'));
    
    }

    public function edit(Customer $customer) {

        $companies = Company::all();

        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer) {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email'
        ]);

        $customer->update($data);

        return redirect('/customers/'. $customer->id);
    }
}
