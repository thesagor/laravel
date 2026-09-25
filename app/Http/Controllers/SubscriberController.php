<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Store a new launch-notification subscriber.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255'],
        ]);

        $subscriber = Subscriber::firstOrCreate([
            'email' => strtolower($data['email']),
        ]);

        return back()->with('status', $subscriber->wasRecentlyCreated
            ? "Thanks! We'll notify you the moment we launch."
            : "You're already on the list — we'll be in touch.");
    }
}
