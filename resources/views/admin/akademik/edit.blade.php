@extends('layouts.admin')

@section('content')
<h1>Edit Akademik</h1>

<form action="{{ route('akademik.update', $akademik->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label>Judul:</label>
        <input type="text" name="judul" value="{{ old('judul', $akademik->judul) }}" required>
    </div>
    <div>
        <label>Konten:</label>
        <textarea name="konten" required>{{ old('konten', $akademik->konten) }}</textarea>
    </div>
    <div>
        <label>Lampiran Saat Ini:</label><br>
        @if($akademik->lampiran)
            <a href="{{ asset('storage/' . $akademik->lampiran) }}" target="_blank">Download</a>
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