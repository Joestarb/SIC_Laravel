<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-2xl font-semibold text-gray-900">{{ config('app.name', 'Laravel') }}</h1>
            <p class="mt-2 text-sm text-gray-600">Powered by Laravel Breeze</p>
        </div>
    </div>
</body>
</html>
