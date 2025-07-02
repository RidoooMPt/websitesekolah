<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi Spendapra</title>
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
    --spendapra-light-blue: #4a90a4; /* Biru muda yang terlihat di header logo */
    --text-dark: #333;
    --text-medium: #666;
    --text-light: #fff;
    --card-bg: #fff;
    --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    --hover-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

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

/* Hero Section Container */
.hero-section {
    position: relative;
    background: url("images/background.png") no-repeat center center/cover;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 300px;
    overflow: hidden;
}

/* Gradient Overlay (Background) */
.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(34, 230, 178, 0.7), rgba(231, 76, 60, 0.0));
    z-index: 0;
}

/* Hero Content Container */
.hero-content {
    position: relative;
    text-align: center;
    z-index: 1;
}

.hero-content h1 {
    color: var(--text-light);
    font-size: 4rem;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    margin-bottom: 10px;
}

.hero-content p {
    color: var(--text-light);
    font-size: 1.5rem;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

/* Main Content Section */
.main-content {
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 20px;
}

.page-title {
    text-align: center;
    margin-bottom: 50px;
}

.page-title h2 {
    color: var(--spendapra-dark-green);
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.page-title p {
    color: var(--text-medium);
    font-size: 1.1rem;
}

/* Achievement List Container - Horizontal Layout */
.achievements-container {
    display: flex;
    flex-direction: column;
    gap: 25px;
    margin-bottom: 50px;
}

/* Achievement Item - Horizontal */
.achievement-item {
    background: var(--card-bg);
    border-radius: 15px;
    box-shadow: var(--shadow);
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    align-items: stretch;
    min-height: 180px;
}

.achievement-item:hover {
    transform: translateY(-3px);
    box-shadow: var(--hover-shadow);
}

/* Achievement Image - Left Side */
.achievement-image {
    width: 280px;
    height: 180px;
    overflow: hidden;
    position: relative;
    flex-shrink: 0;
}

.achievement-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.achievement-item:hover .achievement-image img {
    transform: scale(1.05);
}

.achievement-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--spendapra-green);
    color: var(--text-light);
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: bold;
    box-shadow: 0 2px 10px rgba(0, 168, 150, 0.3);
}

/* Achievement Content - Right Side */
.achievement-content {
    flex: 1;
    padding: 25px 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.achievement-header {
    flex: 1;
}

.achievement-title {
    color: var(--text-dark);
    font-size: 1.4rem;
    font-weight: bold;
    margin-bottom: 12px;
    line-height: 1.4;
}

.achievement-description {
    color: var(--text-medium);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 20px;
}

.achievement-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 15px;
    border-top: 1px solid #eee;
    margin-top: auto;
}

.achievement-date {
    color: var(--text-medium);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}

.achievement-date i {
    color: var(--spendapra-green);
}

.achievement-category {
    background: var(--spendapra-orange);
    color: var(--text-light);
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 500;
    box-shadow: 0 2px 8px rgba(230, 126, 34, 0.3);
}

/* Menu Cards Section */
.menu-cards-wrapper {
    display: flex;
    justify-content: center;
    padding: 0 20px;
    margin: 80px 0 50px;
}

.menu-cards {
    background: var(--card-bg);
    border-radius: 10px;
    box-shadow: var(--shadow);
    padding: 30px 40px;
    width: 100%;
    max-width: 1200px;
}

.menu-cards-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
}

.menu-card {
    display: flex;
    align-items: center;
    gap: 15px;
    transition: all 0.3s ease;
    cursor: pointer;
    padding: 15px 20px;
    border-radius: 15px;
    flex: 1;
    text-decoration: none; /* Menghilangkan underline */
    color: inherit; /* Memastikan warna teks mengikuti parent */
}

.menu-card:hover {
    background: rgba(74, 144, 164, 0.05);
    transform: translateY(-3px);
}

.menu-card .icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--spendapra-orange), #f39c12);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: var(--text-light);
    box-shadow: 0 4px 12px rgba(230, 126, 34, 0.3);
    flex-shrink: 0;
}

.menu-card .content {
    text-align: left;
    flex: 1;
}

.menu-card h3 {
    color: var(--text-dark);
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
}

.menu-card p {
    color: var(--text-medium);
    font-size: 12px;
    line-height: 1.4;
    margin: 0;
}

/* Menghilangkan underline dari semua link dalam menu-card */
.menu-card a {
    text-decoration: none;
    color: inherit;
    display: flex;
    align-items: center;
    gap: 15px;
    width: 100%;
}

/* Footer Styles */
footer {
    padding: 80px 20px 40px;
    display: flex;
    justify-content: center;
    position: relative;
    background: #f0f2f5;
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
    top: -35px;
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
    color: var(--text-light);
    padding-top: 80px;
}

.contact-info {
    flex: 2;
    font-size: 18px;
}

.contact-info p {
    margin-bottom: 15px;
    font-size: 1.15rem;
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
    align-items: flex-end;
}

.map-section-footer h2 {
    margin-bottom: 20px;
    font-size: 1.5rem;
    font-weight: bold;
    color: var(--text-light);
    text-align: center;
    width: 100%;
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
@media (max-width: 992px) {
    .hero-content h1 {
        font-size: 3rem;
    }

    .hero-content p {
        font-size: 1.3rem;
    }

    .achievement-item {
        flex-direction: column;
        min-height: auto;
    }

    .achievement-image {
        width: 100%;
        height: 200px;
    }

    .achievement-content {
        padding: 20px 25px;
    }

    .menu-cards-container {
        flex-wrap: wrap;
        justify-content: center;
    }

    .menu-card {
        flex: unset;
        width: calc(50% - 20px);
    }

    .card-footer {
        flex-direction: column;
        gap: 30px;
        align-items: center;
    }

    .contact-info {
        text-align: center;
        margin-top: 0;
    }

    .map-section-footer {
        align-items: center;
    }
}

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
        box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
    }

    .navbar-menu.active {
        right: 0;
    }

    .navbar-menu li a {
        width: 100%;
        display: block;
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
    }

    .navbar-menu li:last-child a {
        border-bottom: none;
    }

    .hamburger {
        display: block;
    }

    .hero-content h1 {
        font-size: 2.5rem;
    }

    .hero-content p {
        font-size: 1.2rem;
    }

    .main-content {
        padding: 0 15px;
        margin: 30px auto;
    }

    .page-title h2 {
        font-size: 2rem;
    }

    .achievement-item {
        margin-bottom: 20px;
    }

    .achievement-image {
        height: 180px;
    }

    .achievement-content {
        padding: 20px;
    }

    .achievement-title {
        font-size: 1.2rem;
    }

    .menu-cards {
        padding: 20px;
        margin: 0 10px 40px;
        width: calc(100% - 20px);
    }

    .menu-cards-container {
        flex-direction: column;
        gap: 20px;
    }

    .menu-card {
        padding: 15px;
        width: 100%;
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

    .map {
        width: 100%;
        max-width: 300px;
        height: 180px;
    }
}

@media (max-width: 480px) {
    .logo-text h1 {
        font-size: 24px;
    }

    .logo-text p {
        font-size: 12px;
    }

    .hero-content h1 {
        font-size: 2rem;
    }

    .hero-content p {
        font-size: 1rem;
    }

    .page-title h2 {
        font-size: 1.8rem;
    }

    .achievement-content {
        padding: 15px;
    }

    .achievement-title {
        font-size: 1.1rem;
    }

    .achievement-description {
        font-size: 0.9rem;
    }

    .achievement-meta {
        flex-direction: column;
        gap: 10px;
        align-items: flex-start;
    }
}
    </style>
</head>
<body>
    <!-- Navbar -->
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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>PRESTASI</h1>
            <p>SMPN 2 PRAMBON</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="page-title">
            <h2>Prestasi Siswa</h2>
            <p>Berbagai pencapaian membanggakan dari siswa-siswi SMPN 2 Prambon</p>
        </div>

        <!-- Achievement List - Horizontal Layout -->
        <div class="achievements-container">
            <!-- Achievement 1 -->
            <div class="achievement-item">
                <div class="achievement-image">
                    <img src="images/prestasi1.png" alt="Prestasi Akademik">
                    <div class="achievement-badge">Juara 1</div>
                </div>
                <div class="achievement-content">
                    <div class="achievement-header">
                        <h3 class="achievement-title">Olimpiade Matematika Tingkat Provinsi</h3>
                        <p class="achievement-description">Meraih juara 1 dalam Olimpiade Matematika tingkat Provinsi dengan menunjukkan kemampuan problem solving yang luar biasa dan dedikasi tinggi dalam belajar.</p>
                    </div>
                    <div class="achievement-meta">
                        <div class="achievement-date">
                            <i class="fas fa-calendar-alt"></i>
                            <span>15 Maret 2024</span>
                        </div>
                        <div class="achievement-category">Akademik</div>
                    </div>
                </div>
            </div>

            <!-- Achievement 2 -->
            <div class="achievement-item">
                <div class="achievement-image">
                    <img src="images/prestasi2.png" alt="Prestasi Olahraga">
                    <div class="achievement-badge">Juara 2</div>
                </div>
                <div class="achievement-content">
                    <div class="achievement-header">
                        <h3 class="achievement-title">Kejuaraan Futsal Antar SMP Se-Sidoarjo</h3>
                        <p class="achievement-description">Tim futsal putra berhasil meraih juara 2 dalam turnamen bergengsi tingkat kabupaten, menunjukkan sportivitas dan kerja sama tim yang solid.</p>
                    </div>
                    <div class="achievement-meta">
                        <div class="achievement-date">
                            <i class="fas fa-calendar-alt"></i>
                            <span>28 Februari 2024</span>
                        </div>
                        <div class="achievement-category">Olahraga</div>
                    </div>
                </div>
            </div>

            <!-- Achievement 3 -->
            <div class="achievement-item">
                <div class="achievement-image">
                    <img src="images/prestasi3.png" alt="Prestasi Seni">
                    <div class="achievement-badge">Juara 1</div>
                </div>
                <div class="achievement-content">
                    <div class="achievement-header">
                        <h3 class="achievement-title">Festival Tari Tradisional Jawa Timur</h3>
                        <p class="achievement-description">Kelompok tari tradisional meraih juara 1 dalam festival budaya tingkat provinsi, melestarikan dan mengangkat kebudayaan daerah dengan penuh penghayatan.</p>
                    </div>
                    <div class="achievement-meta">
                        <div class="achievement-date">
                            <i class="fas fa-calendar-alt"></i>
                            <span>10 April 2024</span>
                        </div>
                        <div class="achievement-category">Seni & Budaya</div>
                    </div>
                </div>
            </div>

            <!-- Achievement 4 -->
            <div class="achievement-item">
                <div class="achievement-image">
                    <img src="images/prestasi4.png" alt="Prestasi Karya Ilmiah">
                    <div class="achievement-badge">Juara 3</div>
                </div>
                <div class="achievement-content">
                    <div class="achievement-header">
                        <h3 class="achievement-title">Lomba Karya Tulis Ilmiah Remaja</h3>
                        <p class="achievement-description">Berhasil meraih juara 3 dalam lomba karya tulis ilmiah dengan tema lingkungan hidup, menunjukkan kepedulian terhadap isu-isu global dan kemampuan riset yang baik.</p>
                    </div>
                    <div class="achievement-meta">
                        <div class="achievement-date">
                            <i class="fas fa-calendar-alt"></i>
                            <span>22 Januari 2024</span>
                        </div>
                        <div class="achievement-category">Karya Ilmiah</div>
                    </div>
                </div>
            </div>

            <!-- Achievement 6 -->
            <div class="achievement-item">
                <div class="achievement-image">
                    <img src="images/prestasi5.png" alt="Prestasi Bahasa">
                    <div class="achievement-badge">Juara 1</div>
                </div>
                <div class="achievement-content">
                    <div class="achievement-header">
                        <h3 class="achievement-title">English Speech Contest Regional</h3>
                        <p class="achievement-description">Meraih juara 1 dalam lomba pidato bahasa Inggris tingkat regional dengan tema "Future Leaders", menunjukkan kemampuan berbahasa Inggris yang excellent.</p>
                    </div>
                    <div class="achievement-meta">
                        <div class="achievement-date">
                            <i class="fas fa-calendar-alt"></i>
                            <span>18 Juni 2024</span>
                        </div>
                        <div class="achievement-category">Bahasa</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Menu Cards Section -->
    <section class="menu-cards-wrapper">
        <div class="menu-cards">
            <div class="menu-cards-container">
                <a href="/tentang" class="menu-card">
                    <div class="icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="content">
                        <h3>TENTANG SPENDAPRA</h3>
                        <p>Informasi lengkap tentang sejarah, visi, misi, dan profil sekolah</p>
                    </div>
                </a>
                
                <a href="/akademik" class="menu-card">
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="content">
                        <h3>AKADEMIK</h3>
                        <p>Program akademik, kurikulum, dan kegiatan pembelajaran di sekolah</p>
                    </div>
                </a>
                
                <a href="/kritiknsaran" class="menu-card">
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="content">
                        <h3>Kritik & Saran</h3>
                        <p>Berita terkini dan informasi penting seputar kegiatan sekolah</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.985955277604!2d112.56054377504901!3d-7.466801692544781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780b0029c5ca87%3A0x2bedf254132eb7fe!2sSMPN%202%20PRAMBON!5e0!3m2!1sid!2sid!4v1751357741242!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        
                </div>  
            </div>
        </div>
    </footer>

  <script>
    const hamburger = document.getElementById("hamburger");
    const navbarMenu = document.getElementById("navbar-menu");

    hamburger.addEventListener("click", () => {
      navbarMenu.classList.toggle("active");
    });

    document.addEventListener("click", function (e) {
      if (!hamburger.contains(e.target) && !navbarMenu.contains(e.target)) {
        navbarMenu.classList.remove("active");
      }
    });
  </script>
</body>
</html>