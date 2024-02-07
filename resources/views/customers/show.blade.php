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
                    <li>{{ $contact->name }} - {{ $contact->email }}</li>
                    @endforeach
                </ul>
            </div>

            {{-- Display connected notes --}}
            <div class="p-6 text-white">
                <h3 class="text-lg font-semibold mb-4">Connected Notes</h3>
                <ul>
                    @foreach($customer->conversations as $conversation)
                    <li>{{ $conversation->note }}</li>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>
</x-app-layout>