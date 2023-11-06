<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DrewM\MailChimp\MailChimp;
use App\Models\NewsletterSubscription;

class NewsletterSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $apiKey = '84300f30ee8b3d0b59fca5140b231f4d-us21';
            $listId = 'e843b5a3d8';
            $email = $request->input('email');
            $mailchimp = new MailChimp($apiKey);
            // Attempt to subscribe the email address
            $result = $mailchimp->post("lists/$listId/members", [
                'email_address' => $email,
                'status' => 'subscribed',
            ]);
            if ($mailchimp->success()) {
                toastr()->success('Subscribed successfully');
                return redirect()->back();
            } elseif ($result['status'] === 400 && $result['title'] === 'Member Exists') {
                toastr()->info('Email address is already subscribed!');
                return redirect()->back();
            } else {
                return "Error: " . $mailchimp->getLastError();
            }



        return redirect()->back()->with('success', 'You have been subscribed to our newsletter.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsletterSubscription $newsletterSubscription)
    {
        //
    }
}
