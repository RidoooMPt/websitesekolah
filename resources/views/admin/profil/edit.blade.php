@extends('layouts.admin')

@section('content')
<h1>Edit Profil</h1>

<form action="{{ route('profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label>Judul:</label>
        <input type="text" name="judul" value="{{ old('judul', $profil->judul) }}" required>
    </div>
    <div>
        <label>Isi:</label>
        <textarea name="isi" required>{{ old('isi', $profil->isi) }}</textarea>
    </div>
    <div>
        <label>Gambar Saat Ini:</label><br>
        @if($profil->gambar)
            <img src="{{ asset('storage/' . $profil->gambar) }}" width="100">
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
