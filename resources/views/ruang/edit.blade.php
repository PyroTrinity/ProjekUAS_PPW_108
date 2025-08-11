@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Edit Ruangan</h2>

    <form action="{{ route('ruang.update', $ruang->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1">Nama Ruangan</label>
            <input type="text" name="nama" class="w-full border px-3 py-2" value="{{ $ruang->nama }}" required>
        </div>

        <div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2">Update</button>
        </div>
    </form>
@endsection
