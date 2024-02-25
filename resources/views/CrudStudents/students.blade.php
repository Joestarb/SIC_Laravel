@extends('plantilla')
@vite('resources/css/app.css')
@extends('CrudStudents/form')

@section('sidebar')
    <h1 class="text-center text-2xl   mt-16 mb-4 ">Lista de Estudiantes</h1>
    <div  >
   
    </div>
    <div class="flex justify-center my-4">
        <table class="  whitespace-nowrap  rounded-lg bg-white divide-y divide-gray-300  ">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Apellido</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha de Nacimiento</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Comentarios</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 ">
                @foreach ($students as $student)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student->name_student }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student->lastname_student }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student->id_student }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student->birthdate }}</td>
                        <td class="px-6 py-4 whitespace-nowrap overflow-hidden max-w-xs">
                            <div class="truncate" title="{{ $student->comments }}">
                                {{ $student->comments }}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
