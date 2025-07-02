// File: resources/views/admin/profil/index.blade.php
@extends('layouts.admin')

@section('content')
<h1>Data Profil</h1>
<a href="{{ route('profil.create') }}">+ Tambah Profil</a>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($profils as $profil)
        <tr>
            <td>{{ $profil->judul }}</td>
            <td>{{ $profil->isi }}</td>
            <td>
                @if($profil->gambar)
                <img src="{{ asset('storage/' . $profil->gambar) }}" width="100">
                @else
                Tidak ada gambar
                @endif
            </td>
            <td>
                <a href="{{ route('profil.edit', $profil->id) }}">Edit</a>
                <form action="{{ route('profil.destroy', $profil->id) }}" method="POST" style="display:inline">
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