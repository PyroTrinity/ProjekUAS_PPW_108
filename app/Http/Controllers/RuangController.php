<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    public function index()
    {
        $ruangs = Ruang::all();
        return view('ruang.index', compact('ruangs'));
    }

    public function create()
    {
        return view('ruang.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama' => 'required']);
        Ruang::create($request->all());
        return redirect()->route('ruang.index');
    }

    public function edit(Ruang $ruang)
    {
        return view('ruang.edit', compact('ruang'));
    }

    public function update(Request $request, Ruang $ruang)
    {
        $request->validate(['nama' => 'required']);
        $ruang->update($request->all());
        return redirect()->route('ruang.index');
    }

    public function destroy(Ruang $ruang)
    {
        $ruang->delete();
        return back();
    }
}

