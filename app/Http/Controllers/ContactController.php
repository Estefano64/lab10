<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
        {
            return view('contact');
        }
    
        public function submitForm(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:100',
                'email' => 'required|email|max:100',
                'message' => 'required|string',
            ]);
    
            // Save the submitted data to the database (optional)
            Contact::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
            ]);
    
            // Redirect back to the form with a success message
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        }
}
