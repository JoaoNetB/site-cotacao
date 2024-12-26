<!doctype html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>@yield("title")</title>
</head>
<body>
    <div class="container mx-auto">
        @yield("content")
    </div>
</body>
</html>
