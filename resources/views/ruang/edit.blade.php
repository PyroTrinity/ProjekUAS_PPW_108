<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit Ruangan</h2>
    </x-slot>

    <div class="py-6">
        <form action="{{ route('ruang.update', $ruang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>Nama Ruangan</label>
                <input type="text" name="nama" class="w-full border px-3 py-2" value="{{ $ruang->nama }}" required>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-green-500 text-white px-4 py-2">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
