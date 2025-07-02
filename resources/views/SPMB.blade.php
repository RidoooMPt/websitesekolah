<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 Prambon - SPMB</title>
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
        background: #f0f2f5;
        min-height: 100vh;
    }

    :root {
        --spendapra-green: #00a896;
        --spendapra-dark-green: #00796b;
        --spendapra-orange: #e67e22;
        --text-dark: #333;
        --text-medium: #666;
        --text-light: #fff;
        --card-bg: #fff;
        --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
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
        background: var(--spendapra-green);
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

    /* Hero Section with Orange Gradient Overlay */
/* Hero Section Container */
.hero-section {
    position: relative;
    background: url("images/background.png") no-repeat center center/cover;
    height: 600px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 40px;
}

/* Gradient Overlay */
.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(230, 126, 34, 0.7), rgba(231, 76, 60, 0.0));
    z-index: 0;
}

/* Content Container */
.hero-content {
    position: relative;
    z-index: 1;
    text-align: center;
    color: white;
    padding: 20px;
    max-width: 1000px;
    width: 100%;
}

/* Title Styles */
.hero-title h1 {
    font-size: 90px;
    font-weight: bolder;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.48);
    margin-bottom: 20px;
    letter-spacing: 2px;
    color: var(--spendapra-green);
    -webkit-text-stroke: 2px white;
    line-height: 1.1;
}

/* Subtitle Styles */
.hero-title p {
    font-size: 1.5rem;
    background: var(--spendapra-green);
    color: var(--text-light);
    padding: 15px 40px;
    border-radius: 50px;
    font-weight: 600;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1), 
                0 0 0 2px white;
    display: inline-block;
    box-sizing: border-box;
    margin-top: 10px;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .hero-section {
        height: 300px;
    }
    
    .hero-title h1 {
        font-size: 50px;
        -webkit-text-stroke: 1px white;
    }
    
    .hero-title p {
        font-size: 1.2rem;
        padding: 12px 30px;
    }
}

@media (max-width: 480px) {
    .hero-title h1 {
        font-size: 40px;
    }
    
    .hero-title p {
        font-size: 1rem;
        padding: 10px 20px;
    }
}
    /* Menu Cards Section */
    .menu-cards-wrapper {
        padding: 0 20px;
        display: flex;
        justify-content: center;
        margin: 30px 0;
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
    }

    .menu-card:hover {
        background: rgba(0, 168, 150, 0.1);
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

    /* Responsive Design for Menu Cards */
    @media (max-width: 768px) {
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
    }

    /* Main Content Section */
    .main-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto 50px;
        padding: 40px;
        background: var(--card-bg);
        border-radius: 15px;
        box-shadow: var(--shadow);
    }

    .welcome-image img {
        width: 350px;
        height: auto;
        border-radius: 10px;
    }

    .welcome-text {
        flex: 1;
        padding-left: 40px;
    }

    .welcome-text h2 {
        font-size: 2.5rem;
        color: var(--spendapra-dark-green);
        margin-bottom: 20px;
    }

    .welcome-text h2 span {
        color: var(--spendapra-green);
    }

    .welcome-text p {
        color: var(--text-medium);
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .button button {
        background: var(--spendapra-green);
        color: white;
        border: none;
        padding: 12px 30px;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 168, 150, 0.3);
    }

    .button button:hover {
        background: var(--spendapra-dark-green);
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 168, 150, 0.4);
    }

    /* Schedule Section */
    .schedule-container {
        max-width: 1200px;
        margin: 0 auto 50px;
        background: white;
        border-radius: 20px;
        box-shadow: var(--shadow);
        overflow: hidden;
    }

    .schedule-header {
        text-align: center;
        padding: 40px 20px;
        background: linear-gradient(135deg, var(--spendapra-green) 0%, var(--spendapra-dark-green) 100%);
        color: white;
        position: relative;
    }

    .schedule-logo {
        font-size: 28px;
        font-weight: 300;
        margin-bottom: 10px;
        opacity: 0.9;
    }

    .schedule-title {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .schedule-subtitle {
        font-size: 16px;
        opacity: 0.9;
        font-weight: 300;
    }

    .schedule-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        padding: 40px;
    }

    .schedule-card {
        background: white;
        border-radius: 15px;
        padding: 25px 20px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .schedule-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .schedule-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        border-radius: 15px 15px 0 0;
    }

    .prestasi::before, .mektab::before {
        background: linear-gradient(135deg, #ff9a56 0%, #ff6b35 100%);
    }

    .afirmasi::before, .domisili::before {
        background: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
    }

    .card-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .card-title {
        font-size: 16px;
        font-weight: 600;
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        margin-bottom: 15px;
        display: inline-block;
    }

    .prestasi .card-title, .mektab .card-title {
        background: linear-gradient(135deg, #ff9a56 0%, #ff6b35 100%);
    }

    .afirmasi .card-title, .domisili .card-title {
        background: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%);
    }

    .schedule-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .schedule-item:last-child {
        border-bottom: none;
    }

    .schedule-label {
        font-size: 14px;
        color: var(--text-dark);
        font-weight: 500;
    }

    .schedule-date {
        font-size: 13px;
        color: var(--text-medium);
        font-weight: 400;
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
        .schedule-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .main-content {
            flex-direction: column;
            padding: 30px;
        }
        
        .welcome-text {
            padding-left: 0;
            padding-top: 30px;
            text-align: center;
        }
        
        .welcome-image img {
            width: 100%;
            max-width: 400px;
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

        .nav-container {
            flex-wrap: wrap;
        }

        .schedule-grid {
            grid-template-columns: 1fr;
            padding: 30px;
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
            flex-direction: column;
            gap: 30px;
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
            height: 180px;
        }
    }

    @media (max-width: 480px) {
        .welcome-text h2 {
            font-size: 2rem;
        }
        
        .welcome-text p {
            font-size: 1rem;
        }
        
        .button button {
            padding: 10px 25px;
        }
        
        .nav-container {
            flex-direction: column;
            gap: 15px;
        }
        
        .nav-item {
            flex-direction: row;
            justify-content: center;
            gap: 10px;
        }
        
        .nav-icon {
            margin-bottom: 0;
        }
    }
    </style>
</head>
<body>
    {{-- Navbar --}}
    <header>
        <div class="logo-navbar">
            <img src="images/logo.png" alt="logo-navbar" />
            <div class="logo-text">
                <h1>SPENDAPRA</h1>
                <p>SMPN 2 PRAMBON</p>
            </div>
        </div>
        <div class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <nav id="list-navbar">
            <ul class="navbar-menu" id="navbar-menu">
                <li><a href="/">HOME</a></li>
                <li><a href="/tentang">TENTANG SPENDAPRA</a></li>
                <li><a href="/akademik">AKADEMIK</a></li>
                <li><a href="/profil">PROFIL GURU</a></li>
                <li class="active"><a href="/SPMB">PENDAFTARAN</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section (Wallpaper) - Tidak diubah -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-title">
                <h1>SPMB SPENDAPRA</h1>
                <p>SMP NEGERI 2 PRAMBON</p>
            </div>
        </div>
    </section>

    <!-- Menu Cards Section -->
    <section class="menu-cards-wrapper">
        <div class="menu-cards">
            <div class="menu-cards-container">
                <div class="menu-card">
                    <div class="icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="content">
                        <h3>Masuk</h3>
                        <p>Informasi lengkap tentang sejarah, visi, misi, dan profil sekolah</p>
                    </div>
                </div>
                
                <div class="menu-card">
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="content">
                        <h3>Daftar</h3>
                        <p>Program akademik, kurikulum, dan kegiatan pembelajaran di sekolah</p>
                    </div>
                </div>
                
                <div class="menu-card">
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="content">
                        <h3>Brosur</h3>
                        <p>Berita terkini dan informasi penting seputar kegiatan sekolah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section>
        <div class="block-bg main-content">
            <div class="welcome-image">
                <img src="images/karakter.png" alt="Student"> 
           </div>
            <div class="welcome-text">
                <h2>SPMB SMP NEGERI 2<span> PRAMBON</span></h2>
                <p>Sistem Penerimaan Murid Baru untuk Sekolah Menengah Pertama Negeri Kabupaten Sidoarjo. SPMB bertujuan untuk memberikan akses pendidikan berkualitas untuk semua peserta didik.</p>
                <div class="button">
                    <button type="submit" name="daftar">Daftar sekarang</button>
                </div>
            </div> 
        </div>
    </section>

    <!-- Schedule Section -->
    <section>
        <div class="schedule-container">
            <div class="schedule-header">
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

    {{-- Footer --}}
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
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>