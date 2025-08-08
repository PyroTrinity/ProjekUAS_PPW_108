<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Data Ruangan</h2>
    </x-slot>

    <div class="py-6">
        <a href="{{ route('ruang.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Tambah Ruangan</a>
        <table class="mt-4 table-auto w-full border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Ruang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ruangs as $ruang)
                <tr>
                    <td>{{ $ruang->id }}</td>
                    <td>{{ $ruang->nama }}</td>
                    <td>
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
    </div>
</x-app-layout>
