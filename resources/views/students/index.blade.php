@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
<body class="bg-blue-300">
    <h1 class="text-3xl font-bold text-center text-black-500 my-4">Daftar Siswa</h1>

    <div class="px-4 md:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($students as $student)
                <a href="/students/{{ $student['id'] }}" class="block">
                    <div class="border-3 border-transparent hover:border-blue-500 rounded-xl">
                    <x-card>
                        <div class="flex items-center space-x-6 ">
                            <img src="https://placehold.co/400/png" alt="" class="w-20 h-20 rounded-full">
                            <div>
                                <h2 class="text-xl font-bold">{{ $student['nama'] }}</h2>
                                <p class="text-sm text-blue-500">{{ $student['username'] }}</p>
                                <p class="text-sm mt-1">{{ $student['deskripsi'] }}</p>
                            </div>
                        </div>
                    </div>
                    </x-card>
                </a>
            @endforeach
        </div>
    </div>
@endsection
</body>
