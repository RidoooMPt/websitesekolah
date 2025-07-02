<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akademik;
use Illuminate\Support\Facades\Storage;

class AkademikController extends Controller
{
    public function index()
    {
        $akademiks = Akademik::all();
        return view('admin.akademik.index', compact('akademiks'));
    }

    public function create()
    {
        return view('admin.akademik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $data = $request->only('judul', 'konten');

        if ($request->hasFile('lampiran')) {
            $data['lampiran'] = $request->file('lampiran')->store('akademik', 'public');
        }

        Akademik::create($data);

        return redirect()->route('akademik.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $akademik = Akademik::findOrFail($id);
        return view('admin.akademik.edit', compact('akademik'));
    }

    public function update(Request $request, $id)
    {
        $akademik = Akademik::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $data = $request->only('judul', 'konten');

        if ($request->hasFile('lampiran')) {
            if ($akademik->lampiran && Storage::disk('public')->exists($akademik->lampiran)) {
                Storage::disk('public')->delete($akademik->lampiran);
            }
            $data['lampiran'] = $request->file('lampiran')->store('akademik', 'public');
        }

        $akademik->update($data);

        return redirect()->route('akademik.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $akademik = Akademik::findOrFail($id);
        if ($akademik->lampiran && Storage::disk('public')->exists($akademik->lampiran)) {
            Storage::disk('public')->delete($akademik->lampiran);
        }
        $akademik->delete();

        return redirect()->route('akademik.index')->with('success', 'Data berhasil dihapus.');
    }
}
