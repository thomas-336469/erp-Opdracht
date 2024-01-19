<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold text-white">Edit Customer</h1>
    </x-slot>

    <div class="container mx-auto mt-6">
        <form method="POST" action="{{ route('customers.update', $customer->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="company_name" class="block text-white">Company Name</label>
                <input type="text" name="company_name" id="company_name" value="{{ $customer->company_name }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="kvk_number" class="block text-white">KvK Number</label>
                <input type="text" name="kvk_number" id="kvk_number" value="{{ $customer->kvk_number }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="first_name" class="block text-white">First Name</label>
                <input type="text" name="first_name" id="first_name" value="{{ $customer->first_name }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="last_name" class="block text-white">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="{{ $customer->last_name }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="street" class="block text-white">Street</label>
                <input type="text" name="street" id="street" value="{{ $customer->street }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="house_number" class="block text-white">House Number</label>
                <input type="text" name="house_number" id="house_number" value="{{ $customer->house_number }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="postcode" class="block text-white">Postcode</label>
                <input type="text" name="postcode" id="postcode" value="{{ $customer->postcode }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="city" class="block text-white">City</label>
                <input type="text" name="city" id="city" value="{{ $customer->city }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="email" class="block text-white">Email</label>
                <input type="email" name="email" id="email" value="{{ $customer->email }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="phone_number" class="block text-white">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" value="{{ $customer->phone_number }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="function" class="block text-white">Function</label>
                <input type="text" name="function" id="function" value="{{ $customer->function }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update customer</button>
            </div>
        </form>
    </div>
</x-app-layout>