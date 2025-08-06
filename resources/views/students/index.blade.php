<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-300 p-6">
    <h1 class="text-3xl font-bold mb-6 text-center">Daftar Siswa</h1>

    <x-card>
    <div class="grid grid-cols-2 gap-4">
        @foreach($students as $student)
            <a href="/students/{{ $student['id'] }}" class="block">
                <div class="bg-white p-4 rounded-xl border flex items-center space-x-6 h-full">
                    <img src="https://placehold.co/400/png" alt="" class="w-20 h-20 rounded-full">
                    <div>
                        <h2 class="text-xl font-bold">{{ $student['nama'] }}</h2>
                        <p class="text-sm text-blue-500">{{ $student['username'] }}</p>
                        <p class="text-sm mt-1">{{ $student['deskripsi'] }}</p>     
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-card>

</body>
</html>