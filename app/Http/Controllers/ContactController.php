<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('frontend.pages.contact');
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
        try {
            $request->validate([
               'name'           => 'required|string',
               'email'          => 'required',
               'message'        => 'required',
           ]);

         $contact =  Contact::create([
               "name"           => $request->name,
               "email"          => $request->email,
               "message"        => $request->message,

           ]);
           // Send the email
        // Mail::to('recipient@example.com')->send(new ContactMessage($contact));


           return back()->with(['success' => 'Thank you for your message!']);
            }
       catch (\Exception $e) {
           return back()->with(['error' => ' failed: ' . $e->getMessage()]);
           }

    }

    public function contactlist(){

        $feedback = Contact::all();

        return view('backend.components.Contact_Us.list',compact('feedback'));
    }

    public function contactview($id){

        $messages = Contact::find($id);

        return view('backend.components.Contact_Us.feedback_view',compact('messages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
