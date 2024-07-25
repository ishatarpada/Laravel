<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* $customers = Customer::with('latestOrder')->find(5);
        return $customers; */

        /* $customers = Customer::with('oldestOrder')->find(5);
        return $customers; */

        /* $customers = Customer::with('largestOrder')->find(5);
        return $customers; */

        /* $customers = Customer::with('smallestOrder')->find(5);
        return $customers; */

       /*  $customers = Customer::with('smallestOrderDate')->find(5);
        return $customers; */

        /* $customers = Customer::with('largestOrderDate')->find(5);
        return $customers; */

        /* $customers = Customer::with('orders')->get();
        return $customers; */

        $customers = Customer::with('orders')->with("latestOrder")->get();
        return $customers;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order = Order::create([
            'amount' => 320,
            'customer_id' =>5
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
