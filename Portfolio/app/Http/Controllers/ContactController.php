<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'subject' => 'required',
        ]);

        // Create a new contact record
        Contact::create([
            'first_name' => $validatedData['firstname'],
            'last_name' => $validatedData['lastname'],
            'subject' => $validatedData['subject'],
        ]);

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Contact message submitted successfully!');
    }
}
