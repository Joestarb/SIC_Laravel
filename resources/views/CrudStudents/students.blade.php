@extends('plantilla')
@vite('resources/css/app.css')

@section('sidebar')
<a href="/students/create" class="mt-4 bg-emerald-500 rounded-md p-2 text-white text-sm font-semibold absolute top-16 right-20 hover:bg-emerald-600">
    Agregar nuevo alumno
</a>

<h1 class="text-center text-3xl mt-20 mb-6 font-semibold">Lista de Estudiantes</h1>

<div class="flex flex-col justify-center my-4 px-10">
    <table class="w-full bg-white rounded-md overflow-hidden">
        <thead class="bg-gray-50">
            <tr>
                <th class="py-3 text-left text-sm font-medium text-gray-500 uppercase">Nombre</th>
                <th class="py-3 text-left text-sm font-medium text-gray-500 uppercase">Apellido</th>
                <th class="py-3 text-left text-sm font-medium text-gray-500 uppercase">ID</th>
                <th class="py-3 text-left text-sm font-medium text-gray-500 uppercase">Fecha de Nacimiento</th>
                <!-- <th class="py-3 text-left text-sm font-medium text-gray-500 uppercase">Comentarios</th> -->
                <th class="py-3 text-left text-sm font-medium text-gray-500 uppercase">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($students as $student)
            <tr>
                <td class="py-4 whitespace-nowrap">{{ $student->name_student }}</td>
                <td class="py-4 whitespace-nowrap">{{ $student->lastname_student }}</td>
                <td class="py-4 whitespace-nowrap">{{ $student->id_student }}</td>
                <td class="py-4 whitespace-nowrap">{{ $student->birthdate }}</td>
                <!-- <td class="py-4 whitespace-nowrap overflow-hidden max-w-xs">
                            <div class="truncate text-gray-600" title="{{ $student->comments }}">
                                {{ $student->comments }}
                            </div>
                        </td> -->
                <td>
                    <a href="{{ route('students.show', $student->id) }}">Ver detalles</a>
                </td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <div class="flex gap-5 justify-center mt-10">
        {{$students->links()}}
    </div>

</div>
@endsection