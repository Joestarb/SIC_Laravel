@extends('plantilla')
@vite('resources/css/app.css')

@section('sidebar')
<a href="/students/create" class="mt-4 bg-emerald-500 rounded-md p-2 text-white text-sm font-semibold absolute top-16 right-20 hover:bg-emerald-600">
    Agregar nuevo actividad
</a>

<h1 class="text-center text-3xl mt-20 mb-6 font-semibold">Lista de Actividades</h1>

<div class="flex flex-col justify-center my-4 px-10">
    <table class="w-full bg-white rounded-md overflow-hidden">
        <thead class="bg-gray-50">
            <tr>
                <th class="py-3 text-left text-sm font-medium text-gray-500 uppercase">Nombre</th>
                <th class="py-3 text-left text-sm font-medium text-gray-500 uppercase">Porcentaje</th>
                <th class="py-3 text-left text-sm font-medium text-gray-500 uppercase">Unidad</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">

        </tbody>
    </table>

</div>
@endsection