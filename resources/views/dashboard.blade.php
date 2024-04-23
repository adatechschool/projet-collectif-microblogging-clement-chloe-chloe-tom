<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                @foreach ($posts as $post)
                <div class="p-6 text-black dark:text-white border border-teal-600 rounded-lg bg-white">
                    <h2 class="text-xl text-red-600">{{ $post->title }}</h2>
                    <p class="mt-1 mb-1">{{ $post->content }}</p>
                </div>
            @endforeach

            </div>
        </div>
    </div>
</x-app-layout>