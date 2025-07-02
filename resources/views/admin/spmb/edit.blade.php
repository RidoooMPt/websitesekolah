
// File: resources/views/admin/spmb/edit.blade.php
@extends('layouts.admin')

@section('content')
<h1>Edit SPMB</h1>

<form action="{{ route('spmb.update', $spmb->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label>Judul:</label>
        <input type="text" name="judul" value="{{ old('judul', $spmb->judul) }}" required>
    </div>
    <div>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" required>{{ old('deskripsi', $spmb->deskripsi) }}</textarea>
    </div>
    <div>
        <label>Lampiran Saat Ini:</label><br>
        @if($spmb->lampiran)
            <a href="{{ asset('storage/' . $spmb->lampiran) }}" target="_blank">Download</a>
        @else
            Tidak ada lampiran
        @endif
    </div>
    <div>
        <label>Ganti Lampiran:</label>
        <input type="file" name="lampiran">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>
@endsection
