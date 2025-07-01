<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SMPN 2 Prambon - Profil Guru</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
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
    .hamburger {
      display: none;
      color: var(--spendapra-green);
      font-size: 24px;
      cursor: pointer;
    }

    /* Teacher Banner Section */
    .teacher-banner {
      display: flex;
      padding: 20px;
      gap: 20px;
      margin: 20px auto;
      max-width: 1200px;
    }
    .banner-photo {
      flex: 1;
      height: 300px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: var(--shadow);
    }
    .banner-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .banner-photo.middle {
      flex: 0.7;
      align-self: flex-end;
      height: 250px;
    }

    /* Welcome Text */
    .welcome-section {
      text-align: center;
      padding: 30px 20px;
      margin-bottom: 30px;
    }
    .welcome-section p {
      font-size: 1.5rem;
      color: var(--text-medium);
      margin-bottom: 10px;
    }
    .welcome-section h2 {
      font-size: 2.5rem;
      color: var(--spendapra-green);
    }

    /* Headmaster Profile */
    .headmaster-profile {
      text-align: center;
      padding: 20px;
      margin-bottom: 40px;
    }
    .headmaster-card {
      background: var(--card-bg);
      border-radius: 10px;
      padding: 30px;
      max-width: 400px;
      margin: 20px auto;
      box-shadow: var(--shadow);
    }
    .headmaster-card img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
      border: 5px solid var(--spendapra-green);
    }
    .headmaster-name {
      font-size: 1.5rem;
      font-weight: bold;
      color: var(--text-dark);
      margin-bottom: 5px;
    }
    .headmaster-title {
      font-size: 1.2rem;
      color: var(--spendapra-green);
    }

    /* Teacher Profile Section */
    .teachers-profile {
      padding: 40px 20px;
      margin-bottom: 40px;
    }
    .section-title {
      text-align: center;
      margin-bottom: 30px;
    }
    .section-title h2 {
      color: var(--text-dark);
      font-size: 2.5rem;
      margin-bottom: 10px;
    }
    .section-subtitle {
      color: var(--text-medium);
      font-size: 1.2rem;
    }
    .teachers-container {
      overflow-x: auto;
      white-space: nowrap;
      padding: 20px 0;
      margin: 0 auto;
      max-width: 1200px;
    }
    .teachers-slider {
      display: inline-flex;
      gap: 20px;
    }
    .teacher-card {
      display: inline-block;
      text-align: center;
      background: var(--card-bg);
      border-radius: 10px;
      box-shadow: var(--shadow);
      padding: 20px;
      width: 250px;
      transition: transform 0.3s ease;
      white-space: normal;
    }
    .teacher-card:hover {
      transform: translateY(-5px);
    }
    .teacher-photo img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }
    .teacher-name {
      font-size: 1.2rem;
      font-weight: bold;
      color: var(--text-dark);
      margin-bottom: 5px;
    }
    .teacher-subject {
      font-size: 1rem;
      color: var(--spendapra-green);
      margin-bottom: 5px;
    }
    .teacher-school {
      font-size: 0.9rem;
      color: var(--text-medium);
    }

    /* Slider Controls */
    .slider-controls {
      display: flex;
      justify-content: center;
      margin-top: 20px;
      gap: 10px;
    }
    .slider-btn {
      background: var(--spendapra-green);
      color: var(--text-light);
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 1.5rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .slider-btn:hover {
      background: var(--spendapra-dark-green);
    }

    /* Footer Styles */
    footer {
      padding: 80px 20px 40px;
      display: flex;
      justify-content: center;
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
    .map iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .teacher-banner {
        flex-direction: column;
      }
      .banner-photo, .banner-photo.middle {
        width: 100%;
        height: 200px;
      }
      .banner-photo.middle {
        align-self: center;
      }
    }
    @media (max-width: 768px) {
      header .navbar-menu {
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
      header .navbar-menu.active {
        right: 0;
      }
      .hamburger {
        display: block;
      }
      .teacher-card {
        width: 200px;
      }
      .card-footer {
        flex-direction: column;
        gap: 30px;
      }
      .map-section-footer {
        align-items: center;
      }
      .map {
        width: 100%;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
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
      <li><a href="/">Home</a></li>
      <li><a href="/tentang">Tentang</a></li>
      <li><a href="/akademik">Akademik</a></li>
      <li><a href="/profil">Profil</a></li>
      <li><a href="/SPMB">Pendaftaran</a></li>
    </ul>
  </nav>
</header>

<!-- Teacher Banner Section -->
<div class="teacher-banner">
  <div class="banner-photo">
    <img src="img/foto-guru1.jpg" alt="Guru SMPN 2 Prambon">
  </div>
  <div class="banner-photo middle">
    <img src="img/foto-guru2.jpg" alt="Guru SMPN 2 Prambon">
  </div>
  <div class="banner-photo">
    <img src="img/foto-guru3.jpg" alt="Guru SMPN 2 Prambon">
  </div>
</div>

<!-- Welcome Section -->
<section class="welcome-section">
  <p>Profil Guru</p>
  <h2>SMPN 2 Prambon</h2>
</section>

<!-- Headmaster Profile -->
<section class="headmaster-profile">
  <div class="section-title">
    <h2>Kepala Sekolah</h2>
    <div class="section-subtitle">SMPN 2 Prambon</div>
  </div>
  <div class="headmaster-card">
    <img src="img/kepsek-design.png" alt="Kepala Sekolah">
    <div class="headmaster-name">Nama Kepala Sekolah</div>
    <div class="headmaster-title">Kepala Sekolah S.Pd, M.Pd</div>
  </div>
</section>

<!-- Teacher Profile Section -->
<section class="teachers-profile">
  <div class="section-title">
    <h2>Guru - Guru</h2>
    <div class="section-subtitle">SMPN 2 Prambon</div>
  </div>

  <div class="teachers-container">
    <div class="teachers-slider" id="teachersSlider">
      <div class="teacher-card">
        <div class="teacher-photo">
          <img src="img/guru1.jpg" alt="Guru Matematika" />
        </div>
        <div class="teacher-name">Guru Matematika</div>
        <div class="teacher-subject">Fajrul Rohman S.Pd, M.Pd</div>
        <div class="teacher-school">SMPN 2 Prambon</div>
      </div>
      
      <div class="teacher-card">
        <div class="teacher-photo">
          <img src="img/guru2.jpg" alt="Guru PKN" />
        </div>
        <div class="teacher-name">Guru PKN</div>
        <div class="teacher-subject">Stefani Anggun R S.pd</div>
        <div class="teacher-school">SMPN 2 Prambon</div>
      </div>
      
      <div class="teacher-card">
        <div class="teacher-photo">
          <img src="img/guru3.jpg" alt="Guru Seni Budaya" />
        </div>
        <div class="teacher-name">Guru Seni Budaya</div>
        <div class="teacher-subject">Wahyudi Saputra S.Pd</div>
        <div class="teacher-school">SMPN 2 Prambon</div>
      </div>
      
      <div class="teacher-card">
        <div class="teacher-photo">
          <img src="img/guru4.jpg" alt="Guru TIK" />
        </div>
        <div class="teacher-name">Guru TIK</div>
        <div class="teacher-subject">Permata Karina S.T M.Kom</div>
        <div class="teacher-school">SMPN 2 Prambon</div>
      </div>
      
      <div class="teacher-card">
        <div class="teacher-photo">
          <img src="img/guru5.jpg" alt="Guru Bahasa Indonesia" />
        </div>
        <div class="teacher-name">Guru Bahasa Indonesia</div>
        <div class="teacher-subject">Budianto Wijaya S.Pd</div>
        <div class="teacher-school">SMPN 2 Prambon</div>
      </div>
      
      <div class="teacher-card">
        <div class="teacher-photo">
          <img src="img/guru6.jpg" alt="Guru IPA" />
        </div>
        <div class="teacher-name">Guru IPA</div>
        <div class="teacher-subject">Wirata Widya S.Pd</div>
        <div class="teacher-school">SMPN 2 Prambon</div>
      </div>
      
      <div class="teacher-card">
        <div class="teacher-photo">
          <img src="img/guru7.jpg" alt="Guru Bahasa Inggris" />
        </div>
        <div class="teacher-name">Guru Bahasa Inggris</div>
        <div class="teacher-subject">Bunaika Ramawati S S.Pd</div>
        <div class="teacher-school">SMPN 2 Prambon</div>
      </div>
      
      <div class="teacher-card">
        <div class="teacher-photo">
          <img src="img/guru8.jpg" alt="Guru IPS" />
        </div>
        <div class="teacher-name">Guru IPS</div>
        <div class="teacher-subject">Lyodra Mahendra W S.Kom</div>
        <div class="teacher-school">SMPN 2 Prambon</div>
      </div>
      
      <div class="teacher-card">
        <div class="teacher-photo">
          <img src="img/guru9.jpg" alt="Guru Olahraga" />
        </div>
        <div class="teacher-name">Guru Olahraga</div>
        <div class="teacher-subject">Sintah Sariawan S.OG</div>
        <div class="teacher-school">SMPN 2 Prambon</div>
      </div>
    </div>
  </div>

  <div class="slider-controls">
    <button class="slider-btn" id="prevBtn">‹</button>
    <button class="slider-btn" id="nextBtn">›</button>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="footer-container">
    <div class="header-footer">
      <img src="images/logo.png" alt="Logo SMPN 2 Prambon" class="logo" />
      <div class="title-footer">
        <h1>SPENDAPRA</h1>
        <div class="badge">SMPN 2 PRAMBON</div>
      </div>
    </div>
    <div class="card-footer">
      <div class="contact-info">
        <p><b>Alamat :</b> Jl. Raya Prambon Kajartengguli, Kec. Prambon, Kab Sidoarjo, Jawa Timur.</p>
        <p><b>WA :</b> 081233518800</p>
        <p><b>Instagram :</b> @smpn2_prambon</p>
        <p><b>Email :</b> Spendapra@gmail.com</p>
      </div>
      <div class="map-section-footer">
        <h2>Lokasi Sekolah</h2>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506309.0252272155!2d112.59951496494749!3d-7.516003256430377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780b0029c5ca87%3A0x2bedf254132eb7fe!2sSMPN%202%20PRAMBON!5e0!3m2!1sid!2sid!4v1749081920833!5m2!1sid!2sid"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Script -->
<script>
  // Hamburger Menu Toggle
  const hamburger = document.getElementById('hamburger');
  const navbarMenu = document.getElementById('navbar-menu');

  if (hamburger && navbarMenu) {
    hamburger.addEventListener('click', () => {
      navbarMenu.classList.toggle('active');
    });
  }

  // Slider Guru
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  const teachersSlider = document.getElementById("teachersSlider");

  if (prevBtn && nextBtn && teachersSlider) {
    prevBtn.addEventListener("click", () => {
      teachersSlider.scrollBy({ left: -250, behavior: "smooth" });
    });

    nextBtn.addEventListener("click", () => {
      teachersSlider.scrollBy({ left: 250, behavior: "smooth" });
    });
  }
</script>

</body>
</html>