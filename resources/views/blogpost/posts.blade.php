<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tous les posts</title>
    <!-- Inclure Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-slate-900">
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8 border-b-2 border-gray-400 bg-grey-100 hover:border-blue-500 p-6 shadow-inner">NewsFeed</h1>
        <div class="space-y-6">
            @forelse ($posts as $post)
                <!-- Chaque section de post a un effet d'agrandissement au hover -->
                <a href="/posts/{{$post->id}}" class="block p-6 bg-white border border-gray-200 rounded-lg shadow transition-transform transform hover:scale-110 hover:shadow-lg hover:bg-gray mb-4 border-2 border-gray-300 hover:border-blue-500">
                    <h3 class="text-xl font-semibold text-blue-600 hover:text-blue-800">{{$post->title}}</h3>
                    <p class="text-gray-600 mt-4">{{$post->content}}</p>
                    <p class="text-gray-400 text-xs italic ">Posté par: {{$post->user->name}}</p> <!-- Ajout du nom de l'utilisateur -->
                </a>
            @empty
                <p class="text-center text-gray-600">Aucun post trouvé</p>
            @endforelse
        </div>
    </div>
    <div class="fixed bottom-10 right-4">
        <a href="/blogposts/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-colors">
            Créer un nouveau post
        </a>
    </div>
</body>
</html>
