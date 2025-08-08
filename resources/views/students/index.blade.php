<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-100 py-10 px-4">
        <h1 class="text-2xl font-bold text-center mb-8">Data Siswa</h1>

        
        <div class="max-w-4xl mx-auto grid grid-cols-2 gap-6">
            @foreach ($students as $student)
                <a href="/students/{{ $student['id'] }}" class="block">
                    <x-card class="hover:shadow-md transition-shadow duration-200 cursor-pointer">
                     
                        <div class="flex items-start mb-3">
                            <div class="w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <span class="text-white font-semibold text-sm">
                                    {{ strtoupper(substr($student['nama'], 0, 1)) }}
                                </span>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h2 class="text-base font-semibold text-gray-900 mb-1">{{ $student['nama'] }}</h2>
                                <p class="text-xs text-gray-500 mb-2">{{ '@' . $student['username'] }}</p>
                            </div>
                        </div>
                        
                      
                        <p class="text-sm text-gray-700 leading-relaxed">{{ $student['deskripsi'] }}</p>
                    </x-card>
                </a>
            @endforeach
        </div>
    </div>
</body>
</html>