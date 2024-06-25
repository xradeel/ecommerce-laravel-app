<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contact');
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|digits_between:10,15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Create a new contact message
        $contact = new ContactModel();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->accesstoken = $request->_token;
        $contact->contact = $request->input('contact');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully.');
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
