@extends('layouts.app')

@section('content')
  <!-- extra -->
  <div class="container">
    <div class="photo-section">
        <div class="main-photo">
            <img src="img/exkul.png" alt="Logo Spendapra" />
        </div>
        
        <div class="overlay-photos">
            <div class="overlay-photo photo-1">
                <img src="img/exkul3.png" alt="Logo Spendapra" />
            </div>
            
            <div class="overlay-photo photo-2">
                <img src="img/exkul2.png" alt="Logo Spendapra" />
            </div>
            
            <div class="overlay-photo photo-3">
                <img src="img/exkul1.png" alt="Logo Spendapra" />
            </div>
        </div>
    </div>

    <div class="info-section">
        <div class="info-card">
            <div class="info-text">
                <h1>EKSTRAKULIKULER</h1>
                <h2>SMPN 2</h2>
                <h3>PRAMBON</h3>
            </div>
        </div>
    </div>
</div>
<!-- Extrakulikuler -->
 <section>
    <section class="Profil-sekolah">
        <div class="judul">
          <h2>SMPN 2 Prambon Sidoarjo</h2>
        </div>
          <div class="welcome-text">
            <p>Kegiatan ekstrakurikuler merupakan bagian penting dari proses pendidikan yang bertujuan untuk mengembangkan potensi, bakat, dan minat siswa secara optimal. Melalui berbagai kegiatan di luar jam pelajaran, siswa dapat mengasah kemampuan, membentuk karakter, menumbuhkan semangat kerja sama, dan meningkatkan kemandirian.</p>

            <p>Berdasarkan Undang-Undang Nomor 20 Tahun 2003 Pasal 12 ayat (1) huruf b, setiap peserta didik berhak mendapatkan pendidikan sesuai bakat dan minatnya. Hal ini diperkuat dengan Permendikbud Nomor 62 Tahun 2014 dan Permendikbud Nomor 81A Tahun 2013, yang menyatakan bahwa kegiatan ekstrakurikuler merupakan bagian integral dari kurikulum dan pengembangan diri dalam Kurikulum 2013.</p>
          </div>
        </div>
 </section>
 <!-- list extra -->
  <section>
    <div class="container-list">
        <h1 class="title-list">Aktivitas Ekstrakurikuler</h1>
        <h1 class="subtitle-list">SMPN 2 Prambon</h1>
        
        <div class="grid-container">
          <?php
            include ('koneksi.php');
            $result = mysqli_query($mysqli, "SELECT * FROM ekstrakurikuler") or die (mysqli_error($mysqli));

            while($data = mysqli_fetch_array($result)){
              ?>
            <div class="grid-item">
                <img src="<?php echo $data['foto'] ?>">
                <strong><h3><?php echo $data['nama']; ?></h3></strong>
            </div>
           <?php } ?>
        </div>
    </div>
    <div class="cta-section">
      <a href="organisasi.php" class="cta-button">Lihat Organisasi</a>
    </div>
  </section>
@endsection