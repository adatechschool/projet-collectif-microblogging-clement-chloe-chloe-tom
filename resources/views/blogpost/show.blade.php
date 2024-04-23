<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<body class="bg-gray-200">

<div class="mt-40 max-w-md mx-auto bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-110 hover:shadow-xl">
    <h3 class="text-2xl font-bold text-gray-800 mb-4">{{$post->title}}</h3>
    <p class="text-gray-600 mb-6">{{$post->content}}</p>
    <p class="text-gray-600 mb-6">Posté par: <a href="{{ route('user.posts', ['user_id' => $post->user->id]) }}" class="text-blue-500 hover:text-blue-700">{{$post->user->name}}</a></p>
    <a href="/posts" class="text-blue-500 hover:text-blue-700">Retourner aux articles</a>
</div>
