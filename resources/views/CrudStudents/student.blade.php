@extends('plantilla')

<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-md shadow-md z-50 p-10">
        <h1 class="text-2xl font-bold mb-4">{{ $student->name_student }} {{ $student->lastname_student }}</h1>

        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2 md:col-span-1">
                <p class="font-bold">Fecha de Nacimiento:</p>
                <p class="px-4 py-2 bg-gray-100 rounded-md">{{ $student->birthdate }}</p>
            </div>

            <div class="col-span-2 md:col-span-1">
                <p class="font-bold">Matrícula:</p>
                <p class="px-4 py-2 bg-gray-100 rounded-md">{{ $student->id_student }}</p>
            </div>

            <div class="col-span-2">
                <p class="font-bold">Comentarios:</p>
                <p class="px-4 py-2 bg-gray-100 rounded-md">{{ $student->comments }}</p>
            </div>
        </div>
    </div>
</div>