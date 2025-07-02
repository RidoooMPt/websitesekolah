<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spmb;
use Illuminate\Support\Facades\Storage;

class SpmbController extends Controller
{
    public function index()
    {
        $spmbs = Spmb::all();
        return view('admin.spmb.index', compact('spmbs'));
    }

    public function create()
    {
        return view('admin.spmb.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $data = $request->only('judul', 'deskripsi');

        if ($request->hasFile('lampiran')) {
            $data['lampiran'] = $request->file('lampiran')->store('spmb', 'public');
        }

        Spmb::create($data);

        return redirect()->route('spmb.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $spmb = Spmb::findOrFail($id);
        return view('admin.spmb.edit', compact('spmb'));
    }

    public function update(Request $request, $id)
    {
        $spmb = Spmb::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $data = $request->only('judul', 'deskripsi');

        if ($request->hasFile('lampiran')) {
            if ($spmb->lampiran && Storage::disk('public')->exists($spmb->lampiran)) {
                Storage::disk('public')->delete($spmb->lampiran);
            }
            $data['lampiran'] = $request->file('lampiran')->store('spmb', 'public');
        }

        $spmb->update($data);

        return redirect()->route('spmb.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $spmb = Spmb::findOrFail($id);
        if ($spmb->lampiran && Storage::disk('public')->exists($spmb->lampiran)) {
            Storage::disk('public')->delete($spmb->lampiran);
        }
        $spmb->delete();

        return redirect()->route('spmb.index')->with('success', 'Data berhasil dihapus.');
    }
}
