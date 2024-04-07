<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        // Create a new instance of Checkout model
        $checkout = new Checkout();

        // Assign values from the request to model properties
        $checkout->name = $request->name;
        $checkout->phoneNumber1 = $request->phoneNumber1;
        $checkout->phoneNumber2 = $request->phoneNumber2;
        $checkout->address = $request->address;
        $checkout->guestCount = $request->guestCount;
        $checkout->weddingDate = $request->weddingDate;



        $checkout->save();


        return redirect()->route('checking')->with('success', 'Form submitted successfully!');
    }

    public function showProducts()
    {
        $checkouts = Checkout::all();
        return view('pages.Viewcustomer', ['checkouts' => $checkouts]);
    }

}
