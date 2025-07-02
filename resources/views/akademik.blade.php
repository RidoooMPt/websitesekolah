<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ekstrakurikuler - SMPN 2 Prambon</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <style>
    :root {
      --spendapra-green: #00a896;
      --spendapra-dark-green: #00796b;
      --spendapra-orange: #e67e22;
      --spendapra-light-blue: #4a90a4;
      --text-dark: #333;
      --text-medium: #666;
      --text-light: #fff;
      --card-bg: #fff;
      --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      --hover-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

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

    /* Hero Section */
    .hero {
  height: 200px;
  display: flex;
  flex-direction: column; /* Mengatur arah flex ke vertikal */
  justify-content: center;
  align-items: center;
  color: var(--text-light);
  text-align: center;
  padding: 50px;
}

.hero h2 {
  font-size: 60px;
  font-weight: bold;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
  margin-bottom: 10px;
  letter-spacing: 2px;
  color: orange; /* Warna oranye */
  -webkit-text-stroke: 2px white;
  order: 1; /* Memastikan h2 di atas */
}

.hero p {
  font-size: 1.5rem;
  background: orange; /* Warna oranye */
  color: var(--text-light);
  padding: 15px 40px;
  border-radius: 50px;
  font-weight: 600;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  display: inline-block;
  order: 2; /* Memastikan p di bawah h2 */
  margin-top: 10px; /* Jarak antara title dan subtitle */
}

    /* Image Stack Section */
    .image-stack-container {
      display: flex;
      justify-content: center;
      padding-bottom: 90px;
      padding-top: 50px;
      position: relative;
    }

    .image-stack {
      position: relative;
      width: 800px;
      height: 400px;
      max-width: 100%;
    }

    .image-stack img {
      position: absolute;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
      object-fit: cover;
    }

    .image-stack img:nth-child(1) {
      width: 80%;
      height: 80%;
      z-index: 1;
      left: 55px;
    }

    .image-stack img:nth-child(2) {
      width: 40%;
      height: 40%;
      top: -50px;
      left: -70px;
      z-index: 2;
    }

    .image-stack img:nth-child(3) {
      width: 25%;
      height: 25%;
      bottom: 40px;
      right: 30px;
      z-index: 2;
    }

    .description-section {
      background: var(--card-bg);
      padding: 40px 20px;
      text-align: center;
      max-width: 1000px;
      margin: 0 auto 40px;
      border-radius: 12px;
      box-shadow: var(--shadow);
    }

    .description-section h2 {
      font-size: 2.2rem;
      color: var(--spendapra-dark-green);
      margin-bottom: 20px;
    }

    .description-section p {
      font-size: 1.1rem;
      color: var(--text-medium);
      line-height: 1.8;
    }

    .ekstrakurikuler-container {
      display: flex;
      justify-content: center;
      padding: 0 20px;
      margin-bottom: 40px;
    }

    .ekstrakurikuler-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 25px;
      max-width: 700px;
      width: 100%;
    }

    .ekstrakurikuler-card {
      background: var(--card-bg);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: var(--shadow);
      text-align: center;
      transition: all 0.3s ease;
      max-width: 100%; /* memastikan tidak melebihi container */
    }

    .ekstrakurikuler-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--hover-shadow);
    }

    .ekstrakurikuler-card img {
      width: 80%;
      height: 300px;
      object-fit: cover;
      border-radius: 8px; /* optional */
    }

    .card-content {
      padding: 15px;
    }

    .card-content h3 {
      color: var(--text-dark);
      font-size: 1.2rem;
      margin-bottom: 8px;
    }

    .card-content p {
      color: var(--text-medium);
      font-size: 0.95rem;
    }
    .organization-buttons-container {
  display: flex;
  justify-content: center;
  gap: 40px; /* Space between buttons */
  margin-bottom: 80px;
  margin-right: 30px;
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
      .image-stack {
        width: 100%;
        height: 300px;
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
    }

    @media (max-width: 768px) {
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

      .hero h2 {
        font-size: 2rem;
      }

      .image-stack {
        height: 250px;
      }

      .image-stack img:nth-child(2),
      .image-stack img:nth-child(3) {
        display: none;
      }

      .ekstrakurikuler-grid {
        grid-template-columns: 1fr;
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
      .hero h2 {
        font-size: 1.8rem;
      }
      
      .description-section h2 {
        font-size: 1.8rem;
      }
      
      .description-section p {
        font-size: 1rem;
      }
      
      .organization-button {
        padding: 12px 25px;
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

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
      <li><a href="/">HOME</a></li>
      <li><a href="/tentang">TENTANG SPENDAPRA</a></li>
      <li class="active"><a href="/akademik">AKADEMIK</a></li>
      <li><a href="/profil">PROFIL GURU</a></li>
      <li><a href="/SPMB">PENDAFTARAN</a></li>
    </ul>
  </header>

  <section class="hero">
    <h2>EKSTRAKURIKULER</h2>
    <p>Smp negeri 2 prambon</p>
  </section>

  <section class="image-stack-container">
    <div class="image-stack">
      <img src="images/akademik1.png" alt="Foto Utama">
      <img src="images/akademik2.png" alt="Foto Kecil 1">
      <img src="images/akademik3.png" alt="Foto Kecil 2">
    </div>
  </section>

  <section class="description-section">
    <h2>EKSTRAKURIKULER</h2>
    <p>
      Kegiatan ekstrakurikuler merupakan bagian penting dari pendidikan untuk mengembangkan minat dan bakat siswa. Di SMP Negeri 2 Prambon, tersedia berbagai pilihan kegiatan untuk membangun karakter dan prestasi.
    </p>
  </section>

  <section class="ekstrakurikuler-container">
    <div class="ekstrakurikuler-grid">
      <div class="ekstrakurikuler-card">
        <img src="images/paskib.png" alt="Basket">
        <div class="card-content">
          <h3>Paskibraka</h3>
          <p>Pbb dan kedisiplinan</p>
        </div>
      </div>
      <div class="ekstrakurikuler-card">
        <img src="images/pramuka.jpeg" alt="Pramuka">
        <div class="card-content">
          <h3>Pramuka</h3>
          <p>Menumbuhkan jiwa kepemimpinan.</p>
        </div>
      </div>
      <div class="ekstrakurikuler-card">
        <img src="images/voli.png" alt="Bola Voli">
        <div class="card-content">
          <h3>Bola Voli</h3>
          <p>Mengembangkan keterampilan permainan.</p>
        </div>
      </div>
      <div class="ekstrakurikuler-card">
        <img src="images/padus.jpeg" alt="English Club">
        <div class="card-content">
          <h3>Paduan suara</h3>
          <p>belajar menyuarakan bersama secara kompak </p>
        </div>
      </div>
      <div class="ekstrakurikuler-card">
        <img src="images/PMR.png" alt="Musik">
        <div class="card-content">
          <h3>PMR</h3>
          <p>Palang merah Remaja</p>
        </div>
      </div>
      <div class="ekstrakurikuler-card">
        <img src="images/jurnalistik.png" alt="Jurnalistik">
        <div class="card-content">
          <h3>Jurnalistik</h3>
          <p>Menulis, meliput, dan berpikir kritis.</p>
        </div>
      </div>
      <div class="ekstrakurikuler-card">
        <img src="images/tari.png" alt="Tari Tradisional">
        <div class="card-content">
          <h3>Tari Tradisional</h3>
          <p>Melestarikan budaya bangsa.</p>
        </div>
      </div>
      <div class="ekstrakurikuler-card">
        <img src="images/futsal.png" alt="Futsal">
        <div class="card-content">
          <h3>Futsal</h3>
          <p>Latihan fisik dan sportivitas.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="organization-buttons-container">
    <a href="/organisasi" class="organization-button">
      Lihat Organisasi Sekolah <i class="fas fa-arrow-right"></i>
    </a>
    <a href="/prestasi" class="organization-button">
      Lihat Prestasi Sekolah <i class="fas fa-arrow-right"></i>
    </a>
  </div>

  <footer>
    <div class="footer-container">
      <div class="header-footer">
        <img src="images/logo.png" alt="Logo SMPN 2 Prambon" class="logo">
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.985955277604!2d112.56054377504901!3d-7.466801692544781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780b0029c5ca87%3A0x2bedf254132eb7fe!2sSMPN%202%20PRAMBON!5e0!3m2!1sid!2sid!4v1751357741242!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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