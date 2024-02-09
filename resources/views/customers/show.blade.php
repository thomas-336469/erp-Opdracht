<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold text-white">Customer Details</h1>
    </x-slot>
    <div class="container mx-auto mt-6">
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 shadow-md rounded-md overflow-hidden">
            <div class="p-6">
                <div class="mb-4">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $customer->company_name }}</h2>
                    <p class="text-sm text-gray-500">{{ $customer->function }}</p>
                </div>
                <dl class="grid grid-cols-2 gap-x-4 gap-y-2">
                    <div class="py-2">
                        <dt class="text-sm font-medium text-gray-500">Company</dt>
                        <dd class="text-sm text-gray-800 dark:text-white">{{ $customer->company }}</dd>
                    </div>
                    <div class="py-2">
                        <dt class="text-sm font-medium text-gray-500">KvK Number</dt>
                        <dd class="text-sm text-gray-800 dark:text-white">{{ $customer->kvk_number }}</dd>
                    </div>
                </dl>
            </div>
            <div class="bg-gray-100 dark:bg-gray-700 py-3 px-6 border-t border-gray-200 dark:border-gray-600">
                <p class="text-sm text-gray-500">{{ $customer->email }}</p>
                <p class="text-sm text-gray-500">{{ $customer->phone_number }}</p>
            </div>
            {{-- Display connected contacts --}}
            <div class="p-6 text-white">
                <h3 class="text-lg font-semibold mb-4">Connected Contacts</h3>
                <ul>
                    @foreach($customer->contacts as $contact)
                    <li class="mb-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-lg font-semibold">{{ $contact->first_name }} {{ $contact->last_name }}</p>
                                <p class="text-gray-500">E-mail: {{ $contact->email }}</p>
                                <p class="text-gray-500">Phone: {{ $contact->phone }}</p>
                            </div>
                            <div class="flex">
                                {{-- Edit button --}}
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                                {{-- Delete button --}}
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                </form>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Add contact button --}}
            <div class="p-6 text-white">
                <a href="{{ route('contacts.create', ['client_id' => $customer->id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Contact</a>
            </div>


            {{-- Display connected notes --}}
            <div class="p-6 text-white">
                <h3 class="text-lg font-semibold mb-4">Connected Notes</h3>
                <ul>
                    @foreach($customer->conversations as $conversation)
                    <li class="mb-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-lg font-semibold">Date: {{ $conversation->conversation_date }}</p>
                                <p class="text-lg font-semibold">Time: {{ $conversation->conversation_time }}</p>
                                <p class="text-lg font-semibold">Spoken with: {{ $conversation->spoken_with }}</p>
                                <p class="text-gray-500">Note: {{ $conversation->note }}</p>
                            </div>
                            <div class="flex">
                                {{-- Edit button --}}
                                <a href="{{ route('conversations.edit', $conversation->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                                {{-- Delete button --}}
                                <form action="{{ route('conversations.destroy', $conversation->id) }}" method="POST" class="ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                </form>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            {{-- Add button to create note --}}
            <div class="p-6 text-white">
                <a href="{{ route('conversations.create', ['client_id' => $customer->id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Contact</a>
            </div>

</x-app-layout>