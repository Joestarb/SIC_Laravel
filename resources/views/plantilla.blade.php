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

        <nav class="absolute w-full bg-emerald-500 top-0 z-50 text-white text-center py-4">
            <h1 class="text-xl font-bold">Sistema Integral de Calificaciones</h1>
        </nav>

        <div class="flex-grow flex absolute top-0">
            <!-- Barra lateral -->
            <div id="sidebar" class="sidebar fixed z-50 w-1/5 h-screen flex flex-col justify-between transform -translate-x-full transition-transform duration-300">
                <!-- Logo o nombre de la aplicación -->
                <div class="py-4 px-6 text-white text-xl font-bold mt-12">
                    Bienvenido
                </div>
                <!-- Enlaces de navegación -->
                <nav class="text-white px-4">
                    <a href="/" class="block py-3 px-6 sidebar-link hover:bg-white hover:text-gray-800 hover:shadow-md rounded">Inicio</a>
                    <a href="#" class="block py-3 px-6 sidebar-link hover:bg-white hover:text-gray-800 hover:shadow-md rounded">Calificaciones</a>
                    <a href="#" class="block py-3 px-6 sidebar-link hover:bg-white hover:text-gray-800 hover:shadow-md rounded">Perfil</a>
                    <!-- Agrega más enlaces según necesites -->
                </nav>
                <!-- Footer de la barra lateral -->
                <div class="py-4 px-6 text-white text-sm">
                    © 2024 SIC
                </div>
            </div>

            <!-- Botón para abrir/cerrar el sidebar -->
            <button id="toggleSidebar" class="fixed z-50 border-4 mt-4 ml-4 bg-white rounded-full p-2 text-gray-800">
                <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Contenido principal -->
        </div>

        <!-- Footer de la página -->
        <footer class="bg-emerald-500 bottom-0 z-40 text-white text-center py-4">
            Todos los derechos reservados &copy; 2024
        </footer>
    </main>

    <script>
        // Script para abrir/cerrar el sidebar
        const sidebar = document.getElementById('sidebar');
        const toggleSidebar = document.getElementById('toggleSidebar');

        toggleSidebar.addEventListener('click', function() {
            sidebar.classList.toggle('open');
        });
    </script>
</body>
</html>
