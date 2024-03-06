@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
    <link rel="stylesheet" href="ruta/a/tu/hoja/de/estilos.css">
</head>
<body class="bg-gray-100">

    <main class="flex items-center justify-center h-screen">
        @yield('formUsers')
        <form method="POST" id="formAlumno" action="{{ route('students.store') }}" class="bg-white rounded-lg p-8 w-96 space-y-4 shadow-md">
            <h3 class="text-xl text-center font-medium">Agregar estudiante</h3>
            @csrf

            <div>
                <label for="name_student" class="block text-gray-800 font-bold mb-2">Nombre</label>
                <input type="text" id="name_student" name="name_student" placeholder="Nombre del Estudiante" class="border rounded-md py-2 px-3 text-gray-700" value="{{ old('name_student') }}">
                @error('name_student')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="lastname_student" class="block text-gray-800 font-bold mb-2">Apellidos</label>
                <input type="text" id="lastname_student" name="lastname_student" placeholder="Apellido del Estudiante" class="border rounded-md py-2 px-3 text-gray-700" value="{{ old('lastname_student') }}">
                @error('lastname_student')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="id_student" class="block text-gray-800 font-bold mb-2">Matricula</label>
                <input type="text" id="id_student" name="id_student" placeholder="ID del Estudiante" class="border rounded-md py-2 px-3 text-gray-700" value="{{ old('id_student') }}">
                @error('id_student')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="birthdate" class="block text-gray-800 font-bold mb-2">Fecha de Nacimiento</label>
                <input type="date" id="birthdate" name="birthdate" placeholder="Fecha de Nacimiento" class="border rounded-md py-2 px-3 text-gray-700" value="{{ old('birthdate') }}">
                @error('birthdate')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="comments" class="block text-gray-800 font-bold mb-2">Comentarios</label>
                <textarea id="comments" name="comments" placeholder="Comentarios" class="resize-none border rounded-md py-2 px-3 text-gray-700">{{ old('comments') }}</textarea>
                @error('comments')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-center gap-x-5">
                <a href="/student" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50" @click="showModal = false">Cancelar</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Enviar</button>
            </div>
        </form>
    </main>

</body>
</html>