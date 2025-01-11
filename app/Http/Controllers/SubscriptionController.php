<?php

namespace App\Http\Controllers;
use App\Models\Subscription;


use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    //
    public function getIndex () {
        $subscriptions = Subscription::all();
        return view('subscriptions', compact('subscriptions'));
    }

    // public function getOne (Subscription $subscription) {
    //     return view('subscription', compact('subscription'));
    // }

    public function postOrder (Subscription $subscription, Request $request) {
        dd($subscription, $request->all());
    }
    // return view('subscription');
}
