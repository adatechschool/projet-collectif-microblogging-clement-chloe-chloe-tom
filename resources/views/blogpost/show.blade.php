<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-center font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<body class="bg-gray-200">

<div class="m-10 mb-10 mr-10 ml-10 p-6 text-black border border-teal-600 rounded-lg bg-slate-300 transform hover:scale-105 hover:bg-indigo-200 hover:border-4 hover:border-blue-500 transition-all duration-200">
    <p class="text-2xl font-bold text-gray-800 mb-4">{{$post->title}}</p>
    <p class="text-gray-600 mb-6">{{$post->content}}</p>
    <img class="mt-1 mb-1" src="{{env('IMG_PATH')}}{{Storage::url($post->picture)}}">
    <p class="text-gray-600 mb-6">Posté par: <a href="{{ route('user.show', ['user_id' => $post->user->id]) }}" class="text-blue-500 hover:text-blue-700">{{$post->user->name}}</a></p>
</div>
<div class="flex justify-center mt-4">
    <a href="/posts" class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700 hover:scale-105">Retourner au Dashboard</a>
</div></x-app-layout>
