@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Data Barang</h2>

    <!-- Tombol Tambah Barang -->
    <a href="{{ route('barang.create') }}" 
       class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
       + Tambah Barang
    </a>

    <!-- Tabel Barang -->
    <div class="mt-4 overflow-x-auto">
        <table class="w-full border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2 text-left">No</th>
                    <th class="border px-4 py-2 text-left">Nama Barang</th>
                    <th class="border px-4 py-2 text-left">Jumlah</th>
                    <th class="border px-4 py-2 text-left">Ruangan</th>
                    <th class="border px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($barangs as $index => $b)
                    <tr class="hover:bg-gray-50">
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $b->nama_barang }}</td>
                        <td class="border px-4 py-2">{{ $b->jumlah }}</td>
                        <td class="border px-4 py-2">{{ $b->ruang->nama ?? '-' }}</td>
                        <td class="border px-4 py-2 text-center">
                            <a href="{{ route('barang.edit', $b->id) }}" 
                               class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 mr-2">
                               Edit
                            </a>
                            <form action="{{ route('barang.destroy', $b->id) }}" 
                                  method="POST" 
                                  class="inline"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="border px-4 py-2 text-center text-gray-500">
                            Data barang belum tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
