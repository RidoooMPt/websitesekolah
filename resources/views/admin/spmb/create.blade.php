// File: resources/views/admin/spmb/create.blade.php
@extends('layouts.admin')

@section('content')
<h1>Tambah SPMB</h1>

<form action="{{ route('spmb.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Judul:</label>
        <input type="text" name="judul" value="{{ old('judul') }}" required>
    </div>
    <div>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" required>{{ old('deskripsi') }}</textarea>
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
