<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Inventaris</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="bg-white shadow p-4 mb-6">
        <div class="container mx-auto flex justify-between">
            <div>
                <h1 class="font-bold text-3xl mt-2">Inventaris Barang Kantor</h1>
                <br>
                <a href="{{ route('ruang.index') }}" class="text-blue-600 font-semibold">Ruangan</a>
                <a href="{{ route('barang.index') }}" class="ml-4 text-blue-600 font-semibold">Barang</a>
            </div>
            <div>
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600 mt-2">Logout</button>
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
