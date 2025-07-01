@extends('layouts.app')

@section('content')
    <!-- body walpeper -->
    <section class="hero">
        <div class="gradien">
            <div class="overlay">
                <div class="small-logo">
                    <h2>SPENDAPRA</h2>
                    <p>SMP NEGERI 2 PRAMBON</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Body tabel -->
    <section class="listcolumn">
    <nav class="top-nav ">
        <div class="nav-container">
            <a href="tentang.php" class="nav-item">
                <div class="nav-icon">📚</div>
                <p>Tentang Spendapra</p>
            </a>
            <a href="akademik.php" class="nav-item">
                <div class="nav-icon ">🎓</div>
                <p>Akademik</p>
            </a>
            <a href="#" class="nav-item">
                <div class="nav-icon">📜</div>
                <p>Kritik & Saran</p>
            </a>
            <a href="akademik.php" class="nav-item">
                <div class="nav-icon">📰</div>
                <p>Berita</p>
            </a>
        </div>
    </nav>
    </section>
    <!-- Body spmb -->
    <section>
        <div class="block-bg main-content">
            <div class="welcome-image">
                <img src="img/student.png" alt="Kepala Sekolah"> 
           </div>
                <div class="welcome-text">
                   <h2>SPMB SMP NEGERI 2<span> PRAMBON</span></h2>
                   <p>Sistem Penerimaan Murid Baru untuk Sekolah Menengah Pertama Negeri Kabupaten Sidoarjo. SPMB bertujuan untuk memberikan akses pendidikan berkualitas untuk semua peserta didik.</p>
                <div class="button">
                    <button type="submit" name="daftar" >Daftar sekarang</button>
                </div>
               </div> 
     </section>
     <!-- Jadwal pendaftaran -->
      <section>
        <div class="schedule-container">
            <div class="schedule-header">
                <div class="decorative-element"></div>
                <div class="schedule-logo">Jadwal</div>
                <h1 class="schedule-title">Pendaftaran</h1>
                <p class="schedule-subtitle">Berikut Jadwal SPMPTN SMPN 2 Prambon Tahun Ajaran 2025/2026.</p>
            </div>
    
            <div class="schedule-grid">
                <div class="schedule-card prestasi">
                    <div class="card-header">
                        <div class="card-title">Jalur Prestasi</div>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Pendaftaran Jalur</span>
                        <span class="schedule-date">16 s.d 19 April 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Seleksi</span>
                        <span class="schedule-date">21, 22 April 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Pengumuman</span>
                        <span class="schedule-date">23 April 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Daftar Ulang</span>
                        <span class="schedule-date">24 April 2025</span>
                    </div>
                </div>
    
                <div class="schedule-card afirmasi">
                    <div class="card-header">
                        <div class="card-title">Jalur Afirmasi</div>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Pendaftaran Jalur</span>
                        <span class="schedule-date">25 s.d 26 April 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Seleksi</span>
                        <span class="schedule-date">28 April 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Pengumuman</span>
                        <span class="schedule-date">29 April 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Daftar Ulang</span>
                        <span class="schedule-date">30 April 2025</span>
                    </div>
                </div>
    
                <div class="schedule-card mektab">
                    <div class="card-header">
                        <div class="card-title">Jalur Mektab</div>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Pendaftaran Jalur</span>
                        <span class="schedule-date">30 s.d 2 Mei 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Seleksi</span>
                        <span class="schedule-date">4 Mei 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Pengumuman</span>
                        <span class="schedule-date">5 Mei 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Daftar Ulang</span>
                        <span class="schedule-date">6 Mei 2025</span>
                    </div>
                </div>
    
                <div class="schedule-card domisili">
                    <div class="card-header">
                        <div class="card-title">Jalur Domisili</div>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Pendaftaran Jalur</span>
                        <span class="schedule-date">7 s.d 9 Mei 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Seleksi</span>
                        <span class="schedule-date">10 Mei 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Pengumuman</span>
                        <span class="schedule-date">12 Mei 2025</span>
                    </div>
                    <div class="schedule-item">
                        <span class="schedule-label">Daftar Ulang</span>
                        <span class="schedule-date">14 s.d 16 Mei 2025</span>
                    </div>
                </div>
            </div>
        </div>
      </section>
@endsection     