<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Tambah Ruangan</h2>
    </x-slot>

    <div class="py-6">
        <form action="{{ route('ruang.store') }}" method="POST">
            @csrf
            <div>
                <label>Nama Ruangan</label>
                <input type="text" name="nama" class="w-full border px-3 py-2" required>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
