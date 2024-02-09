<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Conversation;

class ConversationController extends Controller
{
    public function index()
    {
        return view('conversations.index');
    }
    public function show($id)
    {
        $customer = Client::findOrFail($id);
        return view('customers.show', compact('customer'));
    }
    public function create($client_id)
    {
        return view('conversations.create', compact('client_id'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required',
            'conversation_date' => 'required|date',
            'conversation_time' => 'required',
            'spoken_with' => 'required|string',
            'note' => 'required|string',
        ]);

        $conversation = Conversation::create($request->all());
        $customerId = $conversation->client_id;

        return redirect()->route('customers.show', ['customer' => $customerId])->with('success', 'Conversation created successfully');
    }
    public function edit($id)
    {
        $conversation = Conversation::findOrFail($id);
        return view('conversations.edit', compact('conversation'));
    }
    public function update(Request $request, Conversation $conversation)
    {
        $request->validate([
            'conversation_date' => 'required|date',
            'conversation_time' => 'required',
            'spoken_with' => 'required|string',
            'note' => 'required|string',
        ]);

        $conversation->update($request->all());

        return redirect()->route('customers.show', ['customer' => $request->client_id])->with('success', 'Conversation updated successfully');
    }
    public function destroy($id)
    {
        $conversation = Conversation::findOrFail($id);
        $customerId = $conversation->client_id;
        $conversation->delete();

        return redirect()->route('customers.show', ['customer' => $customerId])->with('success', 'Conversation deleted successfully');
    }
}
