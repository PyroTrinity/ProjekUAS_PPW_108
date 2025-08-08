<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Inventaris</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-white shadow p-4 mb-6">
        <div class="container mx-auto flex justify-between">
            <div>
                <a href="{{ route('dashboard') }}" class="font-bold">Inventaris</a>
                <a href="{{ route('barang.index') }}" class="ml-4">Barang</a>
                <a href="{{ route('ruang.index') }}" class="ml-4">Ruangan</a>
            </div>
            <div>
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container mx-auto">
        @yield('content')
    </main>
</body>
</html>