@vite('resources/css/app.css')

<link rel="stylesheet" href="@vite('resources/css/app.css')">

<body class="bg-gray-100">
    @yield('formUsers')
    <button id="openModalBtn" class="bg-blue-500   text-white absolute    px-4 py-2 rounded-md   z-50   top-24 right-10 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        Agregar nuevo estudiante
    </button>
    <main class="flex items-center justify-center">
      
    

       <!-- modal.blade.php -->
<div>
   

    <div id="myModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center" style="display: none;">
        <div class="modal-content   left-[470px] top-[70px]  absolute bg-white rounded-lg p-8 w-96 space-y-4 shadow-md">
            <span class="close absolute top-0 right-0 mt-4 mr-4 text-gray-500 cursor-pointer">&times;</span>
            <form method="POST" id="formAlumno" action="{{ route('students.store') }}">
                <h3 class="text-xl text-center font-medium mb-4">Agregar estudiante</h3>
                @csrf

                <div>
                    <label for="name_student" class="block text-gray-800 font-bold mb-2">Nombre</label>
                    <input type="text" id="name_student" name="name_student" placeholder="Nombre del Estudiante" class="border  w-full rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('name_student')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="lastname_student" class="block text-gray-800 font-bold mb-2">Apellidos</label>
                    <input type="text" id="lastname_student" name="lastname_student" placeholder="Apellido del Estudiante" class="border  w-full rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('lastname_student')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="id_student" class="block text-gray-800 font-bold mb-2">Matricula</label>
                    <input type="text" id="id_student" name="id_student" placeholder="ID del Estudiante" class="border  w-full rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('id_student')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="birthdate" class="block text-gray-800 font-bold mb-2">Fecha de Nacimiento</label>
                    <input type="date" id="birthdate" name="birthdate" placeholder="Fecha de Nacimiento" class="border  w-full rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('birthdate')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="comments" class="block text-gray-800 font-bold mb-2">Comentarios</label>
                    <textarea id="comments" name="comments" placeholder="Comentarios" class="resize-none border  w-full rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('comments') }}</textarea>
                    @error('comments')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-center space-x-5">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>



    </main>

</body>
<script>
    // Obtener elementos del DOM
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModalBtn");
    var span = document.getElementsByClassName("close")[0];

    // Abrir modal cuando se haga clic en el botón
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // Cerrar modal cuando se haga clic en la "x"
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Cerrar modal cuando se haga clic fuera de él
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</html>
