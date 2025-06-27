@extends('layouts.app')

@section('content')
    <!-- Body walppeper -->
    <section class="hero">
        <div class="gradien">
            <div class="overlay">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Spendapra" class="hero-logo">
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
    <!-- Profil kepsek -->
     <section>
        <div class="block-bg main-content">
            <div class="welcome-image">
                <img src="{{ asset('images/kepsek.png') }}" alt="Kepala Sekolah"> 
                <p class="principal-name">
                    Susi Rachmawati Widiatianti, S.Pd., M.Pd 
                </p>
                <p class="sekolah-name">
                    Kepala sekolah SMPN2 Prambon 
                </p>
           </div>
                <div class="welcome-text">
                   <h2>Sambutan<span> Kepala Sekolah</span></h2>
                   <p>Di era globalisasi dan digitalisasi, pendidikan turut bertransformasi. 
                    Website sekolah hadir sebagai media penting untuk mempererat komunikasi antara sekolah, siswa, orang tua, dan masyarakat.</p> 
                    <p>Sebagai sekolah baru, kami berkomitmen menjadi lembaga pendidikan yang unggul, inovatif, dan berkarakter. Melalui website ini, kami akan menyampaikan informasi seputar profil sekolah, kegiatan, prestasi, dan pengumuman resmi. 
                    Kami percaya teknologi informasi berperan besar dalampendidikan masa kini.</p> 
                    <p>Kehadiran website ini mencerminkan kesiapan kami menghadapi tantangan zaman dan membentuk generasi yang cerdas, berkarakter, serta siap bersaing. Mari bersama membangun sekolah ini menjadi lembaga yang berkualitas dan berdaya saing tinggi.</p>
               </div> 
     </section>
        <!-- Lokasi Sekolah -->
         <section class="list-space">
         <section>
            <div class="Judul1">
            <iframe width="760" height="275" src="https://www.youtube.com/embed/H0EaKPaqt4Y?si=rHUAoyNXiEFt8SRh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <div class="text">
                        <h3><span>SMP NEGERI 2 </span> PRAMBON</h3>
                        <p>
                        SMP NEGERI 2 PRAMBON (SPENDAPRA) merupakan sekolah negeri yang memiliki fasilitas pembelajaran inspiratif, tenaga pengajar yang kompeten, serta dibangun di kawasan yang kondusif dan menyenangkan untuk belajar.
                        </p>
                        <br>
                        <div class="button">
                            <button type="submit" name="daftar" >Daftar sekarang</button>
                        </div>
                    </div>
                </div>
         </section>
        </section>
@endsection