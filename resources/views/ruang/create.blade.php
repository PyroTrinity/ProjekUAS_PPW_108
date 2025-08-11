@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Tambah Ruangan</h2>

    <form action="{{ route('ruang.store') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Nama Ruangan</label>
            <input type="text" name="nama" class="w-full border px-3 py-2" required>
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('ruang.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Batal</a>
        </div>
    </form>
@endsection
