<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-6">

    <div class="max-w-xl mx-auto bg-white shadow-md rounded p-6">
        <h2 class="font-semibold text-xl mb-4">Edit Barang</h2>

        <form action="/barang/{{ $barang->id }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1">Nama Barang</label>
                <input type="text" name="nama_barang" class="w-full border px-3 py-2" 
                       value="{{ $barang->nama_barang }}" required>
            </div>

            <div class="mt-4">
                <label class="block mb-1">Kategori</label>
                <input type="text" name="kategori" class="w-full border px-3 py-2" 
                       value="{{ $barang->kategori }}" required>
            </div>

            <div class="mt-4">
                <label class="block mb-1">Jumlah</label>
                <input type="number" name="jumlah" class="w-full border px-3 py-2" 
                       value="{{ $barang->jumlah }}" required>
            </div>

            <div class="mt-4">
                <label class="block mb-1">Ruangan</label>
                <select name="ruang_id" class="w-full border px-3 py-2" required>
                    @foreach($ruangs as $r)
                        <option value="{{ $r->id }}" {{ $barang->ruang_id == $r->id ? 'selected' : '' }}>
                            {{ $r->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
                    Update
                </button>
            </div>
        </form>
    </div>

</body>
</html>
