@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Data Ruangan</h2>

    <a href="{{ route('ruang.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Tambah Ruangan</a>

    <table class="mt-4 table-auto w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Nama Ruang</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ruangs as $ruang)
            <tr class="border-b">
                <td class="px-4 py-2 border">{{ $ruang->id }}</td>
                <td class="px-4 py-2 border">{{ $ruang->nama }}</td>
                <td class="px-4 py-2 border">
                    <a href="{{ route('ruang.edit', $ruang->id) }}" class="text-blue-600">Edit</a> |
                    <form action="{{ route('ruang.destroy', $ruang->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="text-red-600">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
