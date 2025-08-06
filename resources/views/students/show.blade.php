<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white p-6">
    <x-card>
        <x-button><a href="/students" class="block text-black-500 hover:underline">Kembali</a></x-button>
        <div class="flex items-center space-x-4 justify-center">
            <img src="{{ $student['foto'] }}" alt="" class="w-24 h-24 rounded-full">

        </div>
        
        <div class="mt-4 flex items-center space-x-4 justify-center flex-col">
            <p class="text-gray-500 mt-1"><b>{{ $student['username'] }}</b></p>
            <h1 class="text-xl font-bold">{{ $student['nama'] }}</h1>
            <p class="text-black mt-1">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
            <p class="mt-2">{{ $student['deskripsi'] }}</p>
        </div>

        <div class="mt-4 flex items-center space-x-4 justify-center"">
            <x-button>
                <a href="">Edit Profile</a>
            </x-button>

            <x-button class="">
                <a href="">Delete Account</a>
            </x-button>

        
        </div>
    </x-card>

</body>
</html>
