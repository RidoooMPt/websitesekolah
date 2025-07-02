// File: resources/views/admin/prestasi/index.blade.php
@extends('layouts.admin')

@section('content')
<h1>Data Prestasi</h1>
<a href="{{ route('prestasi.create') }}">+ Tambah Prestasi</a>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($prestasis as $prestasi)
        <tr>
            <td>{{ $prestasi->nama }}</td>
            <td>{{ $prestasi->deskripsi }}</td>
            <td>
                @if($prestasi->gambar)
                <img src="{{ asset('storage/' . $prestasi->gambar) }}" width="100">
                @else
                Tidak ada gambar
                @endif
            </td>
            <td>
                <a href="{{ route('prestasi.edit', $prestasi->id) }}">Edit</a>
                <form action="{{ route('prestasi.destroy', $prestasi->id) }}" method="POST" style="display:inline">
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