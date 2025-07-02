// File: resources/views/admin/spmb/index.blade.php
@extends('layouts.admin')

@section('content')
<h1>Data SPMB</h1>
<a href="{{ route('spmb.create') }}">+ Tambah SPMB</a>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Lampiran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($spmbs as $spmb)
        <tr>
            <td>{{ $spmb->judul }}</td>
            <td>{{ $spmb->deskripsi }}</td>
            <td>
                @if($spmb->lampiran)
                <a href="{{ asset('storage/' . $spmb->lampiran) }}" target="_blank">Download</a>
                @else
                Tidak ada lampiran
                @endif
            </td>
            <td>
                <a href="{{ route('spmb.edit', $spmb->id) }}">Edit</a>
                <form action="{{ route('spmb.destroy', $spmb->id) }}" method="POST" style="display:inline">
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
