@extends('layouts.admin')

@section('content')
<h1>Selamat Datang di Halaman Admin</h1>
<p>Gunakan menu di atas untuk mengelola konten website.</p>

<div style="display: flex; gap: 20px; flex-wrap: wrap;">
    <div style="flex: 1; min-width: 200px; background: #f1f1f1; padding: 20px; border-radius: 8px;">
        <h3>Prestasi</h3>
        <p>Kelola data prestasi siswa dan sekolah.</p>
        <a href="{{ route('prestasi.index') }}">Lihat Data</a>
    </div>

    <div style="flex: 1; min-width: 200px; background: #f1f1f1; padding: 20px; border-radius: 8px;">
        <h3>SPMB</h3>
        <p>Informasi dan lampiran terkait penerimaan siswa baru.</p>
        <a href="{{ route('spmb.index') }}">Lihat Data</a>
    </div>

    <div style="flex: 1; min-width: 200px; background: #f1f1f1; padding: 20px; border-radius: 8px;">
        <h3>Profil</h3>
        <p>Profil sekolah dan informasi umum lainnya.</p>
        <a href="{{ route('profil.index') }}">Lihat Data</a>
    </div>

    <div style="flex: 1; min-width: 200px; background: #f1f1f1; padding: 20px; border-radius: 8px;">
        <h3>Akademik</h3>
        <p>Konten kurikulum, materi, dan data akademik lainnya.</p>
        <a href="{{ route('akademik.index') }}">Lihat Data</a>
    </div>
</div>
@endsection
