<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'LDK') }}</title>
    <style>
        html, body { height: 100%; }
        body { display: grid; place-items: center; margin: 0; font-family: system-ui, sans-serif; }
        h1 { font-size: clamp(3rem, 8vw, 6rem); font-weight: 300; }
    </style>
</head>
<body>
    <h1>{{ config('app.name', 'LDK') }}</h1>
</body>
</html>
