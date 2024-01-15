<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold text-white">Create New Customer</h1>
    </x-slot>

    <div class="container mx-auto mt-6">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <div class="mb-4">
                <label for="company" class="block text-white">Company:</label>
                <input type="checkbox" name="company" id="company" class="form-checkbox text-blue-500" value="1">
            </div>
            <div class="mb-4">
                <label for="company_name" class="block text-white">Company Name:</label>
                <input type="text" name="company_name" id="company_name" class="form-input" value="{{ old('company_name') }}">
            </div>
            <div class="mb-4">
                <label for="kvk_number" class="block text-white">KvK Number:</label>
                <input type="text" name="kvk_number" id="kvk_number" class="form-input" value="{{ old('kvk_number') }}">
            </div>
            <div class="mb-4">
                <label for="first_name" class="block text-white">First Name:</label>
                <input type="text" name="first_name" id="first_name" class="form-input" value="{{ old('first_name') }}">
            </div>

            <div class="mb-4">
                <label for="last_name" class="block text-white">Last Name:</label>
                <input type="text" name="last_name" id="last_name" class="form-input" value="{{ old('last_name') }}">
            </div>

            <div class="mb-4">
                <label for="street" class="block text-white">Street:</label>
                <input type="text" name="street" id="street" class="form-input" value="{{ old('street') }}">
            </div>
            <div class="mb-4">
                <label for="house_number" class="block text-white">House Number:</label>
                <input type="text" name="house_number" id="house_number" class="form-input" value="{{ old('house_number') }}">
            </div>
            <div class="mb-4">
                <label for="postcode" class="block text-white">Postcode:</label>
                <input type="text" name="postcode" id="postcode" class="form-input" value="{{ old('postcode') }}">
            </div>
            <div class="mb-4">
                <label for="city" class="block text-white">City:</label>
                <input type="text" name="city" id="city" class="form-input" value="{{ old('city') }}">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-white">Email:</label>
                <input type="email" name="email" id="email" class="form-input" value="{{ old('email') }}">
            </div>
            <div class="mb-4">
                <label for="phone_number" class="block text-white">Phone Number:</label>
                <input type="text" name="phone_number" id="phone_number" class="form-input" value="{{ old('phone_number') }}">
            </div>
            <div class="mb-4">
                <label for="function" class="block text-white">Function:</label>
                <input type="text" name="function" id="function" class="form-input" value="{{ old('function') }}">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Customer</button>
        </form>
    </div>
</x-app-layout>