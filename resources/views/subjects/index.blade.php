@extends('plantilla')
@vite('resources/css/app.css')

@section('sidebar')
<a href="/student/create" class="mt-4 bg-emerald-500 rounded-md p-2 text-white text-sm font-semibold absolute top-16 right-20 hover:bg-emerald-600">
    Agregar nuevo alumno
</a>

<h1 class="text-center text-3xl mt-20 mb-6 font-semibold">Lista de Asignaturas</h1>

<div class="flex flex-col justify-center my-4 px-10">
    <table class="w-full bg-white rounded-md overflow-hidden">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nombre de la Unidad</th>
                <th class="py-2 px-4 border-b">Objetivo</th>
                <th class="py-2 px-4 border-b">Asignatura</th>
                <!-- Agrega más encabezados según sea necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach($units as $unit)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $unit->unit_name }}</td>
                    <td class="py-2 px-4 border-b">{{ $unit->objective }}</td>
                    <!-- Ajusta la salida según sea necesario -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
