<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <title>Document</title>
</head>
<body>
    <h1>All posts</h1>

    <div class="">
        @forelse ($posts as $post)
            <a href="/posts/{{$post->id}}">
                <h3>{{$post->title}}</h3>
            </a>
            <p>{{$post->content}}</p>
        @empty
            <p>Nos posts found</p>
        @endforelse
    </div>
</body>
</html>
