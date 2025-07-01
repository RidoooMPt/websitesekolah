<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 Prambon</title>
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
    background: linear-gradient(135deg, var(--spendapra-green), var(--spendapra-dark-green)); /* Gradient disesuaikan */
    transition: width 0.3s ease;
}

.navbar-menu li a:hover {
    color: var(--spendapra-dark-green);
}

.navbar-menu li a:hover::after {
    width: 80%;
}

.navbar-menu li:first-child a { /* Home link active */
    color: var(--spendapra-green);
}

.navbar-menu li:first-child a::after {
    width: 80%;
}

.hamburger {
    display: none;
    color: var(--spendapra-green);
    font-size: 24px;
    cursor: pointer;
}

/* Hero Section */
/* Hero Section Container */
.hero-section {
    position: relative;
    background: url("images/background.png") no-repeat center center/cover;
    height: 650px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 500px;
    margin-bottom: -150px; /* Overlap dengan menu cards */
    overflow: hidden; /* Untuk memastikan gradient tidak overflow */
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
    z-index: 0; /* Pastikan di bawah konten */
}

/* Hero Content Container */
.hero-content {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    z-index: 1; /* Letakkan di atas gradient */
}

/* Logo Styles */
.hero-logo {
    flex-shrink: 0;
    animation: float 3s ease-in-out infinite;
}

.hero-logo img {
    width: 220px;
    height: 220px;
    border-radius: 50%;
    border: 4px solid var(--text-light);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    background: var(--card-bg);
    padding: 10px;
    transition: transform 0.3s ease;
}

.hero-logo img:hover {
    transform: scale(1.05);
}

/* Text Content Styles */
.hero-title {
    color: var(--text-light);
    text-align: left;
    max-width: 600px;
}

.hero-title h1 {
    font-size: 90px;
    font-weight: bolder;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.48);
    margin-bottom: 5px;
    letter-spacing: 2px;
    color: var(--spendapra-green);
    -webkit-text-stroke: 2px white;
    line-height: 1.1;
    animation: fadeInUp 0.8s ease-out;
}

.hero-title p {
    font-size: 1.5rem;
    background: var(--spendapra-green);
    color: var(--text-light);
    padding: 15px 40px;
    border-radius: 50px;
    font-weight: 600;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1), 
                0 0 0 2px white; /* Stroke */
    display: inline-block;
    box-sizing: border-box;
    margin-top: 20px;
    animation: fadeInUp 0.8s ease-out 0.2s both;
    transition: all 0.3s ease;
}

.hero-title p:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15), 
                0 0 0 2px white;
}

/* Animations */
@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .hero-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .hero-title {
        text-align: center;
    }
    
    .hero-title h1 {
        font-size: 70px;
    }
}

@media (max-width: 768px) {
    .hero-section {
        height: auto;
        padding: 100px 0;
    }
    
    .hero-title h1 {
        font-size: 50px;
        -webkit-text-stroke: 1px white;
    }
    
    .hero-title p {
        font-size: 1.2rem;
        padding: 12px 30px;
    }
    
    .hero-logo img {
        width: 180px;
        height: 180px;
    }
}

/* Menu Cards Section */
.menu-cards-wrapper {
    display: flex;
    justify-content: center;
    padding: 0 20px; /* Padding untuk wrapper */
    position: relative;
    z-index: 10; /* Pastikan di atas hero section */
}

.menu-cards {
    background: var(--card-bg);
    border-radius: 10px;
    box-shadow: var(--shadow);
    padding: 30px 40px;
    width: 100%;
    max-width: 1200px; /* Lebar maksimum seperti di gambar */
    margin: 180px auto 20px;
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
    background: rgba(74, 144, 164, 0.05); /* Warna hover menyesuaikan --spendapra-light-blue */
    transform: translateY(-3px);
}

.menu-card .icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--spendapra-orange), #f39c12); /* Oranye seperti di gambar */
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

/* Sambutan Kepala Sekolah Section */
.kepala-sekolah-section {
    padding: 80px 20px; /* Padding atas lebih besar untuk ruang */
    display: flex;
    justify-content: center;
    background: #f0f2f5; /* Background section */
}

.sambutan-card {
    background: var(--card-bg);
    border-radius: 10px;
    box-shadow: var(--shadow);
    padding: 40px;
    max-width: 1200px;
    width: 100%;
    text-align: center; /* Center judul */
}

.sambutan-card h2 {
    color: var(--spendapra-dark-green);
    font-size: 2.2rem;
    margin-bottom: 30px;
    font-weight: bold;
}

.sambutan-content {
    display: flex;
    gap: 40px;
    align-items: flex-start; /* Align item di awal */
    text-align: left; /* Teks konten ke kiri */
}

.kepala-sekolah-image {
    flex-shrink: 0; /* Jangan menyusut */
    text-align: center;
}

.kepala-sekolah-image img {
    width: 250px; /* Ukuran gambar kepala sekolah */
    height: auto;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
}

.kepala-sekolah-name {
    font-weight: bold;
    color: var(--text-dark);
    font-size: 1.1rem;
    margin-bottom: 5px;
}

.kepala-sekolah-title {
    color: var(--text-medium);
    font-size: 0.95rem;
}

.sambutan-text p {
    margin-bottom: 15px;
    line-height: 1.8;
    color: var(--text-medium);
    font-size: 1rem;
}

.sambutan-text p:last-child {
    margin-bottom: 0;
}

/* Video Section */
.video-section {
    padding: 80px 20px;
    display: flex;
    justify-content: center;
    background: #e0e2e5; /* Background section */
}

.video-card {
    background: var(--card-bg);
    border-radius: 10px;
    box-shadow: var(--shadow);
    padding: 40px;
    max-width: 1200px;
    width: 100%;
    display: flex;
    gap: 40px;
    align-items: center;
}

.video-thumbnail-wrapper {
    flex: 1; /* Ambil setengah lebar */
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.video-thumbnail-wrapper img {
    width: 100%;
    height: auto;
    display: block;
}

.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 70px;
    color: rgba(255, 255, 255, 0.8);
    cursor: pointer;
    transition: color 0.3s ease;
}

.play-button:hover {
    color: var(--text-light);
}

.video-text-content {
    flex: 1; /* Ambil setengah lebar */
    text-align: left;
}

.video-text-content h2 {
    color: var(--spendapra-dark-green);
    font-size: 2.2rem;
    margin-bottom: 20px;
    font-weight: bold;
}

.video-text-content p {
    color: var(--text-medium);
    font-size: 1.1rem;
    line-height: 1.7;
    margin-bottom: 30px;
}

.daftar-button {
    display: inline-flex;
    align-items: center;
    background: var(--spendapra-dark-green); /* Hijau gelap */
    color: var(--text-light);
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: bold;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.daftar-button:hover {
    background: var(--spendapra-green); /* Sedikit lebih terang saat hover */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    transform: translateY(-2px);
}

.daftar-button i {
    margin-left: 10px;
    font-size: 0.9em;
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
    /* margin-top: 50px; /* Dihilangkan, padding sudah di card-footer */ */
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
@media (max-width: 992px) { /* Medium devices */
    .hero-title h1 {
        font-size: 3rem;
    }

    .hero-title p {
        font-size: 1.3rem;
    }

    .menu-cards-container {
        flex-wrap: wrap; /* Wrap cards pada layar menengah */
        justify-content: center;
    }

    .menu-card {
        flex: unset; /* Reset flex */
        width: calc(50% - 20px); /* Dua kolom */
    }

    .sambutan-content, .video-card {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .kepala-sekolah-image, .video-thumbnail-wrapper {
        margin-bottom: 20px;
    }

    .sambutan-card h2, .video-text-content h2 {
        font-size: 1.8rem;
    }

    .sambutan-text p, .video-text-content p {
        font-size: 1rem;
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
        align-items: center; /* Center peta */
    }
}

@media (max-width: 768px) { /* Small devices */
    header {
        padding: 15px 20px;
    }

    .navbar-menu {
        position: fixed;
        top: 90px;
        right: -300px; /* Sembunyikan menu */
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
        right: 0; /* Tampilkan menu */
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

    .hero-content {
        flex-direction: column;
        text-align: center;
        gap: 30px;
    }

    .hero-title {
        text-align: center;
    }

    .hero-title h1 {
        font-size: 2.5rem;
    }

    .hero-title p {
        font-size: 1.2rem;
        padding: 12px 30px;
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
        width: 100%; /* Satu kolom */
    }

    .menu-card:hover {
        transform: translateY(-3px);
    }

    .kepala-sekolah-section, .video-section {
        padding: 50px 15px;
    }

    .sambutan-card, .video-card {
        padding: 30px;
    }

    .kepala-sekolah-image img {
        width: 200px;
    }

    .header-footer {
        left: 20px; /* Posisikan lebih ke kiri pada mobile */
        top: -40px; /* Sesuaikan posisi */
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
        padding: 60px 20px 30px; /* Sesuaikan padding atas */
    }

    .contact-info p {
        font-size: 1rem;
    }

    .map {
        width: 100%; /* Lebar penuh di mobile */
        max-width: 300px; /* Batasi lebar maksimal agar tidak terlalu besar */
        height: 180px;
    }
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

            .hero-content {
                flex-direction: column;
                text-align: center;
                gap: 30px;
            }

            .hero-title {
                text-align: center;
            }

            .hero-title h1 {
                font-size: 2.5rem;
            }

            .hero-title p {
                font-size: 1.2rem;
                padding: 12px 30px;
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
            }

            .menu-card:hover {
                transform: translateX(5px);
            }
        }

        @media (max-width: 480px) {
            .logo-text h1 {
                font-size: 24px;
            }

            .logo-text p {
                font-size: 12px;
            }

            .hero-title h1 {
                font-size: 2rem;
            }

            .hero-title p {
                font-size: 1rem;
                padding: 10px 25px;
            }

            .hero-content {
                gap: 20px;
            }
        }

        @media (max-width: 768px) and (min-width: 481px) {
            .menu-card .icon {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .menu-card h3 {
                font-size: 16px;
            }

            .menu-card p {
                font-size: 13px;
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
                <li><a href="/SPMB">PENDAFTARAN</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-logo">
                <img src="images/logo.png" alt="hero-logo" />
            </div>
            <div class="hero-title">
                <h1>SPENDAPRA</h1>
                <p>SMP NEGERI 2 PRAMBON</p>
            </div>
        </div>
    </section>

    <section class="menu-cards-wrapper">
        <div class="menu-cards">
            <div class="menu-cards-container">
                <div class="menu-card">
                    <div class="icon">
                        <i class="fas fa-school"></i> </div>
                    <div class="content">
                        <h3>TENTANG SPENDAPRA</h3>
                        <p>Informasi lengkap tentang sejarah, visi, misi, dan profil sekolah</p>
                    </div>
                </div>
                
                <div class="menu-card">
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="content">
                        <h3>AKADEMIK</h3>
                        <p>Program akademik, kurikulum, dan kegiatan pembelajaran di sekolah</p>
                    </div>
                </div>
                
                <div class="menu-card">
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="content">
                        <h3>Kritik & saran</h3>
                        <p>Berita terkini dan informasi penting seputar kegiatan sekolah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="kepala-sekolah-section">
        <div class="sambutan-card">
            <h2>Sambutan Kepala Sekolah</h2>
            <div class="sambutan-content">
                <div class="kepala-sekolah-image">
                    <img src="images/kepsek.png" alt="Kepala Sekolah">
                    <p class="kepala-sekolah-name">Ruse Rahmawati Wulandari, S.Pd., M.Pd</p>
                    <p class="kepala-sekolah-title">Kepala SMPN 2 Prambon</p>
                </div>
                <div class="sambutan-text">
                    <p>Di era globalisasi dan digitalisasi, pendidikan turut bertransformasi. Website sekolah hadir sebagai platform utama untuk menginspirasi komunikasi antara sekolah, siswa, orang tua, dan masyarakat.</p>
                    <p>Sebagai sekolah baru, kami berkomitmen menjadi lembaga pendidikan yang unggul. Dengan visi dan misi yang jelas, serta terus berinovasi, menyampaikan informasi seputar profil sekolah, kegiatan, prestasi, dan perkembangan terkini.</p>
                    <p>Kami percaya teknologi informasi berperan besar dalam pendidikan masa kini.</p>
                    <p>Kehadiran website ini mencerminkan kesiapan kami menghadapi tantangan dan membentuk generasi yang cerdas, berkarakter, serta siap bersaing.</p>
                    <p>Mari (bersama) membangun sekolah ini menjadi lembaga yang berkualitas dan berdaya saing tinggi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="video-card">    
            <div class="video-thumbnail-wrapper">
                <img src="images/video-thumbnail.png" alt="Video Thumbnail">
                <div class="play-button">
                    <i class="fas fa-play-circle"></i>
                </div>
            </div>
            <div class="video-text-content">
                <h2>SMP NEGERI 2 PRAMBON</h2>
                <p>SMP NEGERI 2 PRAMBON (SPENDAPRA) merupakan sekolah negeri yang berlokasi di Prambon, Sidoarjo. Dengan didukung guru-guru yang kompeten, serta dibangun di kawasan yang kondusif dan menyenangkan untuk belajar.</p>
                <a href="#" class="daftar-button">Daftar Sekarang <i class="fas fa-chevron-right"></i></a>
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
                        <img src="images/map.png" alt="Lokasi Sekolah Google Maps">
                        </div>
                </div>  
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>