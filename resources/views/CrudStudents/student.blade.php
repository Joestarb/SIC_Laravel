<p class="px-6 py-4 whitespace-nowrap">{{ $student->birthdate }}</p>
<p class="px-6 py-4 whitespace-nowrap overflow-hidden max-w-xs">
    <div class="truncate" title="{{ $student->comments }}">
        {{ $student->comments }}
    </div>