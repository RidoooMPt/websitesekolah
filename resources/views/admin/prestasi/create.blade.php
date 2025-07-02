// File: resources/views/admin/prestasi/create.blade.php
@extends('layouts.admin')

@section('content')
<h1>Tambah Prestasi</h1>

<form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Nama Prestasi:</label>
        <input type="text" name="nama" value="{{ old('nama') }}" required>
    </div>
    <div>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" required>{{ old('deskripsi') }}</textarea>
    </div>
    <div>
        <label>Gambar (opsional):</label>
        <input type="file" name="gambar">
    </div>
    <div>
        <button type="submit">Simpan</button>
    </div>
</form>
@endsection