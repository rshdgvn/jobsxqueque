<?php

namespace App\Http\Controllers;

use App\Jobs\SendConfirmationEmail;
use App\Models\Contact;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('index', compact('contacts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        SendConfirmationEmail::dispatch($contact);

        return redirect(route('index'));
    }
}
