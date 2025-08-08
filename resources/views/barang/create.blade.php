<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Tambah Barang</h2>
    </x-slot>

    <div class="py-6">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div>
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="w-full border px-3 py-2" required>
            </div>
            <div class="mt-4">
                <label>Kategori</label>
                <input type="text" name="kategori" class="w-full border px-3 py-2" required>
            </div>
            <div class="mt-4">
                <label>Jumlah</label>
                <input type="number" name="jumlah" class="w-full border px-3 py-2" required>
            </div>
            <div class="mt-4">
                <label>Ruangan</label>
                <select name="ruang_id" class="w-full border px-3 py-2" required>
                    <option value="">-- Pilih Ruangan --</option>
                    @foreach($ruangs as $r)
                        <option value="{{ $r->id }}">{{ $r->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
