// File: resources/views/admin/prestasi/edit.blade.php
@extends('layouts.admin')

@section('content')
<h1>Edit Prestasi</h1>

<form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label>Nama Prestasi:</label>
        <input type="text" name="nama" value="{{ old('nama', $prestasi->nama) }}" required>
    </div>
    <div>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" required>{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>
    </div>
    <div>
        <label>Gambar Saat Ini:</label><br>
        @if($prestasi->gambar)
            <img src="{{ asset('storage/' . $prestasi->gambar) }}" width="100">
        @else
            Tidak ada gambar
        @endif
    </div>
    <div>
        <label>Ganti Gambar:</label>
        <input type="file" name="gambar">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>
@endsection