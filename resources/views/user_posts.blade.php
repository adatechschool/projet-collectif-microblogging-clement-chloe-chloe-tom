<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-center font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Mur') }}
        </h2>
    </x-slot>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts de l'utilisateur</title>
    <!-- Inclure Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-slate-600">
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center text-gray-200 mb-8">Posts de {{ $userName }}</h1>
        <div class="space-y-6">
            @forelse ($posts as $post)
                <!-- Chaque section de post a un effet d'agrandissement au hover -->
                <a href="/posts/{{$post->id}}" class="block p-6 bg-slate-300 border border-blue-200 rounded-lg shadow transition-transform transform hover:scale-105 hover:bg-indigo-200 hover:border-4 hover:border-blue-500 transition-all duration-200">
                    <h3 class="text-xl font-semibold hover:text-blue-800">{{$post->title}}</h3>
                    <p class="text-gray-600 mt-4">{{$post->content}}</p>
                    <img class="mt-1 mb-1" src="{{env('IMG_PATH')}}{{Storage::url($post->picture)}}">
                    <p class="text-gray-400 mb-6 text-xs italic ">Posté par: {{$post->user->name}}</p> <!-- Ajout du nom de l'utilisateur -->
                </a>
                <div class="flex justify-center mt-10">
                    <a href="/posts" class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700 hover:scale-105 transition-all duration-200">Retourner au Dashboard</a>
                </div>
            @empty
                <p class="text-center text-gray-600">Aucun post trouvé</p>
            @endforelse
        </div>
    </div>
</body>
</html>
</x-app-layout>
