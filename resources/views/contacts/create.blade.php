<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold text-white">Create Contact</h1>
    </x-slot>

    <div class="container mx-auto mt-6">
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <input type="hidden" name="client_id" value="{{ $client_id }}">

            <div class="mb-4">
                <label for="first_name" class="block text-white">First Name</label>
                <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="last_name" class="block text-white">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="email" class="block text-white">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-white">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-input mt-1 block w-full" />
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Contact</button>
            </div>
        </form>
    </div>
</x-app-layout>