@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow max-w-lg">
    <h2 class="text-xl font-semibold mb-4">Tambah Barang</h2>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Nama Barang</label>
            <input type="text" name="nama_barang" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-2">Kategori</label>
            <input type="text" name="kategori" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-2">Jumlah</label>
            <input type="number" name="jumlah" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-2">Ruangan</label>
            <select name="ruang_id" class="w-full border px-3 py-2 rounded" required>
                <option value="">-- Pilih Ruangan --</option>
                @foreach($ruangs as $r)
                    <option value="{{ $r->id }}">{{ $r->nama }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Simpan
            </button>
            <a href="{{ route('barang.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded ml-2 hover:bg-gray-600">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
