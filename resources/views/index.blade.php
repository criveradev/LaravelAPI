<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel</title>
</head>

<body>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
        </div>
    @endforeach
    {{ $posts->links() }}

</body>

</html>
