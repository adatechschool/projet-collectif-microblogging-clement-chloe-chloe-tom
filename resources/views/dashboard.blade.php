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
<<<<<<< Updated upstream
                <div class="m-10 mb-10 mr-10 ml-10 p-6 text-black border border-teal-600 rounded-lg bg-white transform hover:scale-105 hover:bg-amber-50 hover:border-4 hover:border-blue-500 transition-all duration-200">
                    <a href="{{ route('posts.show', $post->id) }}" class="block">
                        <h2 class="text-xl text-blue-600">{{ $post->title }}</h2>
                        <p class="mt-1 mb-1">{{ $post->content }}</p>
                    </a>
                    <p class="text-sm text-gray-500">Par <a href="{{ route('user.show', $post->user->id) }}" class="text-blue-500 hover:underline">{{ $post->user->name }}</a></p>
=======
                <div class="p-6 text-black dark:text-white border border-teal-600 rounded-lg bg-white">
                    <h2 class="text-xl text-red-600">{{ $post->title }}</h2>
                    <p class="mt-1 mb-1">{{ $post->content }}</p>
                    <p class="mt-1 mb-1">{{ $post->user_id }}</p>
                    <p class="mt-1 mb-1">{{ $post->picture }}</p>
                    {{-- <img class="mt-1 mb-1" src="{{ asset('storage/' . $post->picture) }}"> --}}
                    {{-- <img class="mt-1 mb-1" src="{{ asset('storage/pictures/Bu6pc760F69dzxqmFCXxkIlFk65JdK3M62PBxUVK.jpg') }}"> --}}
>>>>>>> Stashed changes
                </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
