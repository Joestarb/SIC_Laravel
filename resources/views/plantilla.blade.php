@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Importar app.css -->
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>
    <main class="flex flex-col min-h-screen">
        <!-- Contenido del sidebar -->
        @yield('sidebar')

        <nav class="absolute top-0 w-full  -z-50">
            <x-app-layout>
            </x-app-layout>
            </nav>
    </main>

   
</body>
</html>
