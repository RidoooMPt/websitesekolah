// File: resources/views/admin/profil/create.blade.php
@extends('layouts.admin')

@section('content')
<h1>Tambah Profil</h1>

<form action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Judul:</label>
        <input type="text" name="judul" value="{{ old('judul') }}" required>
    </div>
    <div>
        <label>Isi:</label>
        <textarea name="isi" required>{{ old('isi') }}</textarea>
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