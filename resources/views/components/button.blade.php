@props(['type' => 'button'])

<button type="{{ $type }}" class="bg-gray-300 text-black px-4 py-2 rounded">
    {{ $slot }}
</button>