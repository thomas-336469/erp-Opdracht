<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Client::all();

        return view('customers.index', compact('customers'));
    }
    public function create()
    {
        return view('customers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'company_name' => 'nullable|string',
            'kvk_number' => 'nullable|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'street' => 'required|string',
            'house_number' => 'required|string',
            'postcode' => 'required|string',
            'city' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'function' => 'nullable|string',
        ]);

        $data = $request->except('_token');
        $customer = Client::create($data);

        return redirect()->route('customers.index')->with('success', 'Customer created successfully');
    }

    public function show(Client $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function update(Request $request, Client $customer)
    {
        $request->validate([
            'user_id' => 'required',
            'company_name' => 'nullable|string',
            'kvk_number' => 'nullable|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'street' => 'required|string',
            'house_number' => 'required|string',
            'postcode' => 'required|string',
            'city' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'function' => 'nullable|string',
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully');
    }
    public function destroy(Client $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully');
    }
}
