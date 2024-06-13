<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Stripe;

class DonationController extends Controller
{
    public function create()
    {
        return view('donations.create');
    }
    public function store(Request $request)
    {
        $donation = Donation::create([
            'name' => $request->name,
            'email' => $request->email,
            'amount' => $request->amount,
        ]);

        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            $charge = Stripe\Charge::create([
                'amount' => $request->amount * 100,
                'currency' => 'usd',
                'description' => 'Donation',
                'source' => $request->stripeToken,
            ]);

            // Handle successful payment
            return redirect()->route('donation.success');
        } catch (Stripe\Exception\CardException $e) {
            // Handle card error
            return redirect()->route('donation.error');
        } catch (Exception $e) {
            // Handle other errors
            return redirect()->route('donation.error');
        }
    }

    public function success()
    {
        return view('donations.success');
    }

    public function error()
    {
        return view('donations.error');
    }
}
