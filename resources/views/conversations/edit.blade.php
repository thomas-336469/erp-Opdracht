<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold text-white">Edit Conversation</h1>
    </x-slot>
    <div class="container mx-auto mt-6">
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 shadow-md rounded-md overflow-hidden">
            <div class="p-6">
                <form action="{{ route('conversations.update', $conversation->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="client_id" value="{{ $conversation->client_id }}">
                    <div class="mb-4">
                        <label for="conversation_date" class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="date" name="conversation_date" id="conversation_date" value="{{ $conversation->conversation_date }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="conversation_time" class="block text-sm font-medium text-gray-700">Time</label>
                        <input type="time" name="conversation_time" id="conversation_time" value="{{ $conversation->conversation_time }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="spoken_with" class="block text-sm font-medium text-gray-700">Spoken With</label>
                        <input type="text" name="spoken_with" id="spoken_with" value="{{ $conversation->spoken_with }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
                        <textarea name="note" id="note" rows="3" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $conversation->note }}</textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Conversation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>