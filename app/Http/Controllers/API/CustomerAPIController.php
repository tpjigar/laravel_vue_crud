<?php

namespace App\Http\Controllers\API;

use App\Customer;
use App\Http\Resources\CustomerCollection;
use App\Http\Resources\CustomerResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerAPIController extends Controller
{
    public function index()
    {
        return new CustomerCollection(Customer::with(['emails','phones','pictures'])->paginate(5));
    }

    public function show(Customer $customer)
    {
        return new CustomerResource($customer->load(['emails', 'phones', 'pictures']));
    }

    public function store(Request $request)
    {
        //check duplicate entry for username

        return new CustomerResource(Customer::create($request->all()));
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());

        return new CustomerResource($customer);
    }

    public function destroy(Request $request, Customer $customer)
    {
        $customer->delete();

        return response()->noContent();
    }
}
