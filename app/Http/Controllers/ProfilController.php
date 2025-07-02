<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        $profils = Profil::all();
        return view('admin.profil.index', compact('profils'));
    }

    public function create()
    {
        return view('admin.profil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only('judul', 'isi');

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('profil', 'public');
        }

        Profil::create($data);

        return redirect()->route('profil.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);
        return view('admin.profil.edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only('judul', 'isi');

        if ($request->hasFile('gambar')) {
            if ($profil->gambar && Storage::disk('public')->exists($profil->gambar)) {
                Storage::disk('public')->delete($profil->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('profil', 'public');
        }

        $profil->update($data);

        return redirect()->route('profil.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);
        if ($profil->gambar && Storage::disk('public')->exists($profil->gambar)) {
            Storage::disk('public')->delete($profil->gambar);
        }
        $profil->delete();

        return redirect()->route('profil.index')->with('success', 'Data berhasil dihapus.');
    }
}
