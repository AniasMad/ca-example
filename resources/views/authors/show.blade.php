<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Authors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        
                        
                        <p><b>Name:</b> {{ $author->name }}</p>
                        <p><b>Address:</b> {{ $author->address }}</p>
                        <p><b>Bio:</b> {{ $author->bio }}</p>                        
                        

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    ISBN
                </th>
                <th scope="col" class="px-6 py-3">
                    Publisher
                </th>
            </tr>
        </thead>
            <tbody>

            @forelse($author->books as $book)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $book->title }}
                </th>
                <td class="px-6 py-4">
                    {{ $book->isbn }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('publishers.show', $book->publisher->id) }}">{{ $book->publisher->name }}</a>
                </td>
            </tr>
            @empty
                <h4>No Books found!</h4>
            @endforelse
            </tbody>
        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>