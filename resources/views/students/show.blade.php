@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')
<body class="bg-blue-300">
    
</body>
<div class="flex justify-center mt-20 px-4">
    <div class="w-[900px] max-w-xl">
    <x-card>
        <x-button>
            <a href="/students" class="block text-black-500 hover:underline">Kembali</a>
        </x-button>

        <div class="flex items-center justify-center mt-4">
            <img src="{{ $student['foto'] }}" alt="Foto Siswa" class="w-24 h-24 rounded-full">
        </div>

        <div class="mt-4 flex flex-col items-center text-center">
            <p class="text-gray-500"><b>{{ $student['username'] }}</b></p>
            <h1 class="text-xl font-bold">{{ $student['nama'] }}</h1>
            <p class="text-black mt-1">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
            <p class="mt-2">{{ $student['deskripsi'] }}</p>
        </div>

        <div class="mt-6 flex justify-center space-x-4">
            <x-button>
                <a href="">Edit Profile</a>
            </x-button>

            <x-button >
                <a href="">Delete Account</a>
            </x-button>
        </div>
    </x-card>
@endsection
</div>
