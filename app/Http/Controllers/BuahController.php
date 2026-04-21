<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use Illuminate\Http\Request;

class BuahController extends Controller
{
    public function index()
    {
        $buah = Buah::all();
        return view('buah.index', compact('buah'));
    }

    public function create()
    {
        return view('buah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        Buah::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()->route('buah.index')
            ->with('success', 'Data buah berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $buah = Buah::findOrFail($id);
        return view('buah.show', compact('buah'));
    }

    public function edit(string $id)
    {
        $buah = Buah::findOrFail($id);
        return view('buah.edit', compact('buah'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        $buah = Buah::findOrFail($id);
        $buah->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()->route('buah.index')
            ->with('success', 'Data buah berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $buah = Buah::findOrFail($id);
        $buah->delete();

        return redirect()->route('buah.index')
            ->with('success', 'Data buah berhasil dihapus');
    }
}