<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col items-center justify-center text-center px-6">
        <h1 class="text-5xl font-extrabold text-indigo-600 mb-4">Selamat Datang di Tea Rental</h1>
        <p class="text-xl text-gray-600 mb-8">Sistem Informasi Pengelolaan Armada Mobil yang Mudah dan Terpercaya.</p>
        
        <a href="{{ route('login') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-full font-bold shadow-lg transition">
            Masuk ke Dashboard
        </a>
    </div>
</body>
</html>