<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\Http\Requests\JoinSubscriptionList;

class SubscriptionController extends Controller
{
    public function join(JoinSubscriptionList $request)
    {
        Subscription::create(['email' => $request->get('email')]);

        return back()->with('flash', 'Subscribed!');
    }
}
