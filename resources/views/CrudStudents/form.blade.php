<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
</head>
<body>
    <main class="grid place-content-center">
        @yield('formUsers')
        <button id="toggleForm" class=" mt-4  bg-blue-500 rounded-full p-2  text-white  absolute   right-0    top-16    mr-36">
            Agregar nuevo alumno
        </button>
        <div id="modal" class="hidden fixed inset-0 z-50 overflow-auto bg-gray-900 bg-opacity-50 flex items-center justify-center">
            <div id="formAlumno" class="bg-blue-800 rounded-lg p-8 w-96">
                <div class="mb-4">
                    <label for="student_name" class="block text-white font-bold mb-2">Nombre del Alumno</label>
                    <input type="text" id="student_name" name="student_name" placeholder="Nombre del Alumno" class="form-input w-full px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" value="{{old('student_name')}}">
                    @error('student_name')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email_student" class="block text-white font-bold mb-2">Correo Electrónico</label>
                    <input type="email" id="email_student" name="email_student" placeholder="Correo Electrónico" class="form-input w-full px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" value="{{old('email_student')}}">
                    @error('email_student')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="matricula" class="block text-white font-bold mb-2">Matrícula</label>
                    <input type="text" id="matricula" name="matricula" placeholder="Matrícula" class="form-input w-full px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" value="{{old('matricula')}}">
                    @error('matricula')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-white font-bold mb-2">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" class="form-input w-full px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" value="{{old('password')}}">
                    @error('password')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button id="closeModal" class="mr-4 bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50">Cancelar</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Enviar</button>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Script para abrir/cerrar el formulario
        const modal = document.getElementById('modal');
        const toggleForm = document.getElementById('toggleForm');
        const closeModal = document.getElementById('closeModal');

        toggleForm.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', function() {
            modal.classList.add('hidden');
        });
    </script>
</body>
</html>
