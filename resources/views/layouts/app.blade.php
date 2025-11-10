<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        a { text-decoration: none; }
        img { max-width: 100%; height: auto; }
    </style>
</head>
<body>

    @yield('content')

</body>
</html>
