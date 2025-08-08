<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $student['nama'] }} - Detail Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-100 py-10 px-4">
        <!-- Main Layout Container -->
        <div class="max-w-2xl mx-auto bg-white rounded-lg border-2 border-gray-300 p-8 shadow-sm">
            
            <!-- Profile Image -->
            <div class="flex justify-center mb-6">
                <div class="w-32 h-32 bg-gray-400 rounded-full flex items-center justify-center">
                    <span class="text-white font-bold text-4xl">
                        {{ strtoupper(substr($student['nama'], 0, 1)) }}
                    </span>
                </div>
            </div>


            <div class="text-center mb-6">

                <p class="text-gray-500 text-sm mb-2">{{ '@' . $student['username'] }}</p>
                
        
                <h1 class="text-2xl font-bold text-gray-900 mb-3">{{ $student['nama'] }} ✕</h1>
                
                
                <p class="text-gray-700 text-base mb-4">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
                

                <p class="text-gray-700 text-base leading-relaxed mb-8">{{ $student['deskripsi'] }}</p>
            </div>


            <div class="flex justify-center space-x-4">
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-6 rounded-lg transition-colors duration-200">
                    Edit Profile
                </button>
                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-6 rounded-lg transition-colors duration-200">
                    Delete Account
                </button>
            </div>

            <div class="text-center mt-6">
                <a href="/students" class="text-blue-600 hover:text-blue-800 hover:underline text-sm font-medium">
                    ← Kembali ke Daftar Siswa
                </a>
            </div>
        </div>
    </div>
</body>
</html>