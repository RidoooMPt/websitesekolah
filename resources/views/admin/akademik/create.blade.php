// File: resources/views/admin/akademik/create.blade.php
@extends('layouts.admin')

@section('content')
<h1>Tambah Akademik</h1>

<form action="{{ route('akademik.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Judul:</label>
        <input type="text" name="judul" value="{{ old('judul') }}" required>
    </div>
    <div>
        <label>Konten:</label>
        <textarea name="konten" required>{{ old('konten') }}</textarea>
    </div>
    <div>
        <label>Lampiran (opsional, PDF/DOC):</label>
        <input type="file" name="lampiran">
    </div>
    <div>
        <button type="submit">Simpan</button>
    </div>
</form>
@endsection