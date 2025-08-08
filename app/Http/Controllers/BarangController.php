<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $ruangs = Ruang::all();
        $query = Barang::with('ruang');

        if ($request->ruang_id) {
            $query->where('ruang_id', $request->ruang_id);
        }

        $barangs = $query->get();
        return view('barang.index', compact('barangs', 'ruangs'));
    }

    public function create()
    {
        $ruangs = Ruang::all();
        return view('barang.create', compact('ruangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required|numeric',
            'ruang_id' => 'required',
        ]);
        Barang::create($request->all());
        return redirect()->route('barang.index');
    }

    public function edit(Barang $barang)
    {
        $ruangs = Ruang::all();
        return view('barang.edit', compact('barang', 'ruangs'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required|numeric',
            'ruang_id' => 'required',
        ]);
        $barang->update($request->all());
        return redirect()->route('barang.index');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return back();
    }
}
