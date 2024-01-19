<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold text-white">Customer Overview</h1>
    </x-slot>
    <div class="container mx-auto mt-6">
        <div class="mb-4">
            <a href="{{ route('customers.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Create a Customer</a>
        </div>

        <div class="container mx-auto mt-6">
            <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-100">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">Company</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">Company Name</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">KvK Number</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">First Name</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">Last Name</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">Street</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">House Number</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">Postcode</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">City</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">Email</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">Phone Number</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">Function</th>
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr class="bg-blue-500 text-white">
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->company }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->company_name }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->kvk_number }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->first_name }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->last_name }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->street }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->house_number }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->postcode }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->city }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->email }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->phone_number }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">{{ $customer->function }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-100 text-white">
                            <a href="{{ route('customers.edit', $customer->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</x-app-layout>