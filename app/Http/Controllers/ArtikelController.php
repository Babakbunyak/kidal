<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikels.index', compact('artikels'));
    }

    public function create()
    {
        return view('artikels.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        Artikel::create($validatedData);

        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil disimpan.');
    }

    public function show(Artikel $artikel)
    {
        return view('artikels.show', compact('artikel'));
    }

    public function edit(Artikel $artikel)
    {
        return view('artikels.edit', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $artikel->update($validatedData);

        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();

        return redirect()->route('artikels.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
