<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSIS SPENDAPRA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
    /* Universal Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: #f0f2f5; /* Warna latar belakang umum */
    min-height: 100vh;
}

:root {
    --spendapra-green: #00a896; /* Hijau sesuai logo dan footer */
    --spendapra-dark-green: #00796b; /* Hijau lebih gelap untuk hover/aksen */
    --spendapra-orange: #e67e22; /* Oranye untuk ikon menu card */
    --text-dark: #333;
    --text-medium: #666;
    --text-light: #fff;
    --card-bg: #fff;
    --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    --hover-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}


/* Header Styles */
 /* Header Styles */
 header {
      background: var(--card-bg);
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: var(--shadow);
      position: relative;
      z-index: 1000;
    }

    .logo-navbar {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logo-navbar img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      border: 3px solid var(--spendapra-green);
      padding: 5px;
      background: var(--card-bg);
    }

    .logo-text h1 {
      color: var(--spendapra-green);
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 2px;
    }

    .logo-text p {
      color: var(--text-light);
      font-size: 14px;
      font-weight: 500;
      background-color: var(--spendapra-green);
      padding: 5px;
      border-radius: 10px;
    }

    .navbar-menu {
      display: flex;
      list-style: none;
      gap: 35px;
      align-items: center;
    }

    .navbar-menu li a {
      text-decoration: none;
      color: var(--text-dark);
      font-weight: 500;
      font-size: 16px;
      padding: 10px 20px;
      transition: all 0.3s ease;
      position: relative;
    }

    .navbar-menu li a::after {
      content: '';
      position: absolute;
      bottom: 5px;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 2px;
      background: linear-gradient(135deg, var(--spendapra-green), var(--spendapra-dark-green));
      transition: width 0.3s ease;
    }

    .navbar-menu li a:hover {
      color: var(--spendapra-dark-green);
    }

    .navbar-menu li a:hover::after {
      width: 80%;
    }

    .navbar-menu li.active a {
      color: var(--spendapra-green);
    }

    .navbar-menu li.active a::after {
      width: 80%;
    }

    .hamburger {
      display: none;
      color: var(--spendapra-green);
      font-size: 24px;
      cursor: pointer;
    }

/* OSIS Content Styles */
.osis-content {
    padding: 60px 20px;
    max-width: 1200px;
    margin: 0 auto;
    animation: fadeInUp 1s ease;
    text-align: center; /* Center all content */
}

.osis-content h1 {
    color: var(--spendapra-orange);
    margin-bottom: 20px;
    font-size: 42px;
    font-weight: 700;
    position: relative;
    text-shadow: 
        -2px -2px 0 white,  
        2px -2px 0 white,
        -2px 2px 0 white,
        2px 2px 0 white;
    display: inline-block; /* Makes the underline only as wide as the text */
}

.osis-content h1::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: var(--spendapra-orange);
    border-radius: 2px;
}
.profil-osis-container {
    text-align: center;
    margin: 40px 0;
    animation: zoomIn 1s ease;
}

.profil-osis-photo {
    max-width: 100%;
    width: 1000px;
    height: 450px;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: var(--shadow);
    transition: transform 0.3s ease;
}

.profil-osis-photo:hover {
    transform: scale(1.02);
}

.osis-description, .satgas-description {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    padding: 50px;
    border-radius: 20px;
    box-shadow: var(--shadow);
    margin-bottom: 40px;
    border: 3px solid rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
    line-height: 1.6;
    font-size: 18px;
}

.osis-description:hover {
    transform: translateY(-5px);
}

.instagram-link {
    color: var(--spendapra-orange);
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease;
}

.instagram-link:hover {
    color: #d35400;
    text-decoration: underline;
}

/* Vision Mission Styles */
.vision-mission-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    margin: 50px 0;
}

.vision, .mission {
    background: var(--card-bg);
    padding: 75px;
    border-radius: 20px;
    box-shadow: var(--shadow);
    color: var(--text-dark);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.vision:hover, .mission:hover {
    transform: translateY(-10px);
}

.vision::before, .mission::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    transition: all 0.5s ease;
}

.vision:hover::before, .mission:hover::before {
    top: -20%;
    right: -20%;
}

.vision h2, .mission h2 {
    font-size: 28px;
    color: var(--text-dark);
    text-align: center;
    border-bottom: 3px solid var(--text-dark);
    padding-bottom: 15px;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.vision p, .mission ul {
    font-size: 20px;
    position: relative;
    z-index: 1;
}

.mission ul {
    padding-left: 25px;
}

.mission li {
    margin-bottom: 12px;
    position: relative;
    text-align: left;
}

.mission li::marker {
    color: var(--text-dark);
}

/* Satgas Section */
.satgas-section {
    margin-top: 80px;
}

.gambar {
    text-align: center;
    margin: 40px 0;
    animation: fadeInUp 1s ease 0.3s both;
}

.organisasi {
    max-width: 100%;
    width: 750px;
    height: 500px;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: var(--hover-shadow);
    transition: transform 0.3s ease;
}

.organisasi:hover {
    transform: scale(1.02);
}

/* button  */
.organization-buttons-container {
  display: flex;
  justify-content: center;
  gap: 20px; /* Space between buttons */
  margin-bottom: 80px;
  flex-wrap: wrap; /* Allows buttons to stack on small screens */
}

.organization-button {
  display: inline-flex;
  align-items: center;
  background: var(--spendapra-dark-green);
  color: var(--text-light);
  padding: 15px 30px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: bold;
  font-size: 1.1rem;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  white-space: nowrap; /* Prevents text from wrapping */
}

.organization-button:hover {
  background: var(--spendapra-green);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  transform: translateY(-2px);
}

.organization-button i {
  margin-left: 10px;
  font-size: 0.9em;
}

/* Responsive adjustment for smaller screens */
@media (max-width: 768px) {
  .organization-buttons-container {
    flex-direction: column;
    align-items: center;
    gap: 15px;
  }
  
  .organization-button {
    width: 100%;
    justify-content: center;
  }
}

/* Footer Styles */
footer {
    padding: 80px 20px 40px; /* Padding atas lebih besar untuk ruang */
    display: flex;
    justify-content: center;
    position: relative;
    background: #f0f2f5; /* Background section */
}

.footer-container {
    width: 100%;
    max-width: 1200px;
    position: relative;
}

/* Logo Header di Footer */
.header-footer {
    background-color: var(--card-bg);
    padding: 20px 25px;
    border-radius: 15px;
    display: inline-flex;
    align-items: center;
    position: absolute;
    top: -35px; /* Sesuaikan posisi agar sedikit keluar dari card */
    left: 45px;
    z-index: 2;
    box-shadow: var(--shadow);
}

.header-footer .logo {
    width: 60px;
    height: 60px;
    object-fit: contain;
    margin-right: 15px;
}

.title-footer {
    display: flex;
    flex-direction: column;
}

.title-footer h1 {
    color: var(--spendapra-green);
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
    border-bottom: none;
    padding-bottom: 0;
}

.title-footer .badge {
    background-color: var(--spendapra-green);
    color: var(--text-light);
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 14px;
    display: inline-block;
}

/* Card Footer */
.card-footer {
    background-color: var(--spendapra-green);
    border-radius: 15px;
    padding: 50px;
    box-shadow: var(--shadow);
    width: 100%;
    display: flex;
    gap: 50px;
    color: var(--text-light); /* Warna teks default untuk footer card */
    padding-top: 80px; /* Tambahkan padding atas agar tidak tertutup header-footer */
}

.contact-info {
    flex: 2;
    font-size: 18px;
}

.contact-info p {
    margin-bottom: 15px;
    font-size: 1.15rem; /* Ukuran font disesuaikan */
    line-height: 1.8;
    color: var(--text-light);
}

.contact-info p b {
    color: var(--text-light);
    font-weight: bold;
}

/* Maps Section */
.map-section-footer {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-end; /* Peta di kanan */
}

.map-section-footer h2 {
    margin-bottom: 20px;
    font-size: 1.5rem; /* Ukuran font disesuaikan */
    font-weight: bold;
    color: var(--text-light);
    text-align: center; /* Center judul peta */
    width: 100%; /* Agar bisa di-center */
}

.map {
    width: 300px;
    height: 200px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
}

.map img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Responsive Design */
@media (max-width: 768px) {
    header {
        padding: 15px 20px;
    }

    .navbar-menu {
        position: fixed;
        top: 90px;
        right: -300px;
        width: 250px;
        height: calc(100vh - 90px);
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 30px 20px;
        gap: 20px;
        transition: right 0.3s ease;
    }

    .navbar-menu.active {
        right: 0;
    }

    .navbar-menu li a {
        width: 100%;
        display: block;
        padding: 15px 20px;
    }

    .hamburger {
        display: block;
    }

    .vision-mission-container {
        grid-template-columns: 1fr;
    }

    .logo, .organisasi {
        max-width: 100%;
        height: auto;
    }

    .card-footer {
        flex-direction: column;
        gap: 30px;
        align-items: center;
    }

    .contact-info {
        text-align: center;
    }

    .map-section-footer {
        align-items: center;
    }

    .map {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .logo-text h1 {
        font-size: 24px;
    }

    .logo-text p {
        font-size: 12px;
    }

    .header-footer {
        left: 20px;
        top: -40px;
        padding: 15px 20px;
    }

    .header-footer .logo {
        width: 50px;
        height: 50px;
    }

    .title-footer h1 {
        font-size: 20px;
    }

    .title-footer .badge {
        font-size: 12px;
        padding: 6px 15px;
    }

    .card-footer {
        padding: 60px 20px 30px;
    }

    .contact-info p {
        font-size: 1rem;
    }
}
    </style>
</head>
<body>
    {{-- Navbar --}}
    <header>
        <div class="logo-navbar">
          <img src="images/logo.png" alt="Logo">
          <div class="logo-text">
            <h1>SPENDAPRA</h1>
            <p>SMPN 2 PRAMBON</p>
          </div>
        </div>
        <div class="hamburger" id="hamburger"><i class="fas fa-bars"></i></div>
        <ul class="navbar-menu" id="navbar-menu">
          <li><a href="/home">HOME</a></li>
          <li><a href="/tentang">TENTANG SPENDAPRA</a></li>
          <li class="active"><a href="/akademik">AKADEMIK</a></li>
          <li><a href="/profil">PROFIL GURU</a></li>
          <li><a href="/SPMB">PENDAFTARAN</a></li>
        </ul>
      </header>

      {{-- osis --}}
    <div class="osis-content">
        <h1>Organisasi Siswa Intra Sekolah (OSIS)</h1>
        
        <div class="profil-osis-container">
            <!-- Ganti dengan foto anggota OSIS atau kegiatan OSIS -->
            <img src="images/osis.png" alt="Profil OSIS SPENDAPRA" class="profil-osis-photo">
        </div>
        
        <div class="osis-description">
            <p>
                OSIS (Organisasi Siswa Intra Sekolah) adalah wadah organisasi siswa yang bertujuan untuk mengembangkan keterampilan kepemimpinan, kerja sama, dan tanggung jawab siswa dalam mendukung terciptanya lingkungan sekolah yang dinamis, kreatif, dan inspiratif. OSIS menjadi perpanjangan tangan sekolah dalam menyelenggarakan berbagai program kegiatan yang bermanfaat bagi seluruh siswa. Ingin melihat aktivitas OSIS SPENDAPRA langsung di instagram <a href="https://instagram.com/osiss.spendapra" class="instagram-link">@osiss.spendapra</a>
            </p>
        </div>

        <div class="vision-mission-container">
            <div class="vision">
                <h2>VISI</h2>
                <p>Menjadi OSIS yang aktif, kreatif, dan peduli, untuk membuat sekolah jadi tempat belajar yang menyenangkan bagi semua.</p>
            </div>
            
            <div class="mission">
                <h2>MISI</h2>
                <ul>
                    <li>Mengadakan kegiatan seru yang membuat siswa semangat datang ke sekolah.</li>
                    <li>Mendukung kreativitas siswa lewat lomba, seni, dan olahraga.</li>
                    <li>ide dan saran dari teman-teman untuk membuat sekolah lebih baik.
                    <li>sama dengan guru dan siswa untuk menjaga kenyamanan dan kebersihan sekolah.</li> 
                    <li>Menjadi contoh yang baik dalam bersikap, belajar, dan berteman.</li>
                </ul>
            </div>
        </div>
        <!-- satgas toleransi -->
        <h1>Satgas toleransi</h1>
        
        <div class="profil-osis-container">
            <!-- Ganti dengan foto anggota OSIS atau kegiatan OSIS -->
            <img src="images/satgas.png" alt="Profil OSIS SPENDAPRA" class="profil-osis-photo">
        </div>
        
        
        <div class="satgas-description">
            <p>
                Satgas atau tim satuan tugas intoleransi di sekolah memiliki peran penting dalam menciptakan lingkungan belajar yang aman, nyaman, dan kondusif. Satgas ini bertugas untuk mencegah dan menangani kasus intoleransi, seperti perundungan (bullying) dan kekerasan seksual, yang dapat mengganggu proses belajar mengajar. Ingin melihat kegiatan Satgas Toleransi langsung di <a href="https://instagram.com/osiss.spendapra" class="instagram-link">@satgastoleransii_spendapra</a>
            </p>
        </div>
    </div>
    <div class="organization-buttons-container">
        <a href="/akademik" class="organization-button">
          Lihat Extrakurikuler Sekolah <i class="fas fa-arrow-right"></i>
        </a>
        <a href="/prestasi" class="organization-button">
          Lihat Prestasi Sekolah <i class="fas fa-arrow-right"></i>
        </a>
      </div>

    <footer>
        <div class="footer-container">
            <div class="header-footer"> <img src="images/logo.png" alt="Logo SMPN 2 Prambon" class="logo">
                <div class="title-footer">
                    <h1>SPENDAPRA</h1>
                    <div class="badge">SMPN 2 PRAMBON</div>
                </div>
            </div>
            
            <div class="card-footer"> <div class="contact-info">
                    <p><b>Alamat :</b> Jl. Raya Prambon Kajartengguli, Kec. Prambon, Kab Sidoarjo, Jawa Timur.</p>
                    <p><b>WA :</b> 081233518800</p>
                    <p><b>Instagram :</b> @smpn2_prambon</p>
                    <p><b>Email :</b> Spendapra@gmail.com</p>
                </div>
                
                <div class="map-section-footer">
                    <h2>Lokasi Sekolah</h2>
                    <div class="map">
                        <img src="images/map.png" alt="Lokasi Sekolah Google Maps">
                        </div>
                </div>  
            </div>
        </div>
    </footer>

    <script>
        // Hamburger menu functionality
        document.getElementById('hamburger').addEventListener('click', function() {
            document.getElementById('navbar-menu').classList.toggle('active');
        });
    </script>
</body>
</html>