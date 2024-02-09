<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Client;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }
    public function show($id)
    {
        return view('customers.show', compact('customer'));
    }

    public function create($client_id)
    {
        return view('contacts.create', compact('client_id'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $contact->update($request->all());

        return redirect()->route('customers.show', ['customer' => $contact])->with('success', 'Conversation created successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $contact = Contact::create($request->all());
        $customerId = $contact->client_id;

        return redirect()->route('customers.show', ['customer' => $customerId])->with('success', 'Contact created successfully');
    }
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $customerId = $contact->client_id;
        $contact->delete();

        return redirect()->route('customers.show', ['customer' => $customerId])->with('success', 'Contact deleted successfully');
    }
}
