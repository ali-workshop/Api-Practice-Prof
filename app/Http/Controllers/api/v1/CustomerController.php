<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CustomerResource;
use App\Http\Requests\StoreCutomerRequest;
use App\Http\Requests\UpdateCutomerRequest;
use App\Http\Resources\v1\CustomerCollection;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CustomerCollection(Customer::paginate());
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCutomerRequest $request)
    {
        Customer::create();

    
    
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return response()->json(new CustomerResource($customer));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCutomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
