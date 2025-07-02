<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::all();
        return view('admin.prestasi.index', compact('prestasis'));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only('nama', 'deskripsi');

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('prestasi', 'public');
        }

        Prestasi::create($data);

        return redirect()->route('prestasi.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only('nama', 'deskripsi');

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($prestasi->gambar && Storage::disk('public')->exists($prestasi->gambar)) {
                Storage::disk('public')->delete($prestasi->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('prestasi', 'public');
        }

        $prestasi->update($data);

        return redirect()->route('prestasi.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        if ($prestasi->gambar && Storage::disk('public')->exists($prestasi->gambar)) {
            Storage::disk('public')->delete($prestasi->gambar);
        }
        $prestasi->delete();

        return redirect()->route('prestasi.index')->with('success', 'Data berhasil dihapus.');
    }
}
    