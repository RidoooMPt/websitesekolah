// File: resources/views/admin/akademik/index.blade.php
@extends('layouts.admin')

@section('content')
<h1>Data Akademik</h1>
<a href="{{ route('akademik.create') }}">+ Tambah Akademik</a>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Konten</th>
            <th>Lampiran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($akademiks as $akademik)
        <tr>
            <td>{{ $akademik->judul }}</td>
            <td>{{ $akademik->konten }}</td>
            <td>
                @if($akademik->lampiran)
                <a href="{{ asset('storage/' . $akademik->lampiran) }}" target="_blank">Download</a>
                @else
                Tidak ada lampiran
                @endif
            </td>
            <td>
                <a href="{{ route('akademik.edit', $akademik->id) }}">Edit</a>
                <form action="{{ route('akademik.destroy', $akademik->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection