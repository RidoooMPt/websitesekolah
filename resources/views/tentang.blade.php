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
        background: #f0f2f5;
        min-height: 100vh;
    }

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
        padding: 5px 10px;
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

    .navbar-menu li:nth-child(2) a {
        color: var(--spendapra-green);
    }

    .navbar-menu li:nth-child(2) a::after {
        width: 80%;
    }

    .hamburger {
        display: none;
        color: var(--spendapra-green);
        font-size: 24px;
        cursor: pointer;
    }

    /* Right Sidebar with Logo */
    .right-sidebar {
        background: var(--card-bg);
        border-radius: 15px;
        padding: 150px;
        box-shadow: var(--shadow);
        display: flex;
        align-items: center;
        gap: 30px;
        margin: 20px auto;
        max-width: 1200px;
    }

    .sidebar-logo img {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        background: var(--card-bg);
        padding: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .sidebar-content h3 {
        color: var(--shadow);
        font-size: 40px;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .sidebar-content p {
        color: var(--text-medium);
        line-height: 1.6;
        font-size: 15px;
        text-align: justify;
    }

    /* Main Content Container */
    .main-container {
        max-width: 1200px;
        margin: 30px auto;
        padding: 0 20px;
    }

    /* Vision Mission Section */
    .vision-mission-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin: 40px 0;
    }

    .vision-card, .mission-card {
        background: var(--card-bg);
        border-radius: 15px;
        padding: 30px;
        box-shadow: var(--shadow);
    }

    .vision-card .header, .mission-card .header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .vision-card .header {
        background: linear-gradient(135deg, var(--spendapra-orange), #f39c12);
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        margin: -30px -30px 20px -30px;
    }

    .mission-card .header {
        background: linear-gradient(135deg, var(--spendapra-green), var(--spendapra-dark-green));
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        margin: -30px -30px 20px -30px;
    }

    .vision-card h3, .mission-card h3 {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .vision-card ol, .mission-card ol {
        list-style: none;
        padding: 0;
        counter-reset: item;
    }

    .vision-card li, .mission-card li {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
        color: var(--text-medium);
        line-height: 1.6;
        counter-increment: item;
        position: relative;
        padding-left: 30px;
    }

    .vision-card li:last-child, .mission-card li:last-child {
        border-bottom: none;
    }

    .vision-card li::before {
        content: counter(item) ". ";
        color: var(--spendapra-orange);
        font-weight: bold;
        position: absolute;
        left: 0;
    }

    .mission-card li::before {
        content: counter(item) ". ";
        color: var(--spendapra-green);
        font-weight: bold;
        position: absolute;
        left: 0;
    }

    /* Quote Section */
    .quote-section {
        text-align: center;
        margin: 40px 0;
        padding: 20px;
        font-style: italic;
        color: var(--text-dark);
        font-size: 1.2rem;
    }

    .quote-highlight {
        color: var(--spendapra-green);
        font-weight: bold;
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

    /* Logo Header in Footer */
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

    /* Footer Card */
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

    .map iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .vision-mission-section {
            grid-template-columns: 1fr;
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

        .hamburger {
            display: block;
        }

        .right-sidebar {
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .sidebar-logo img {
            width: 100px;
            height: 100px;
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

        .vision-card, .mission-card {
            padding: 20px;
        }

        .vision-card .header, .mission-card .header {
            margin: -20px -20px 20px -20px;
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
                <li><a href="/">HOME</a></li>
                <li><a href="/tentang" class="active">TENTANG SPENDAPRA</a></li>
                <li><a href="/akademik">AKADEMIK</a></li>
                <li><a href="/profil">PROFIL GURU</a></li>
                <li><a href="/SPMB">PENDAFTARAN</a></li>
            </ul>
        </nav>
    </header>

    <!-- Right Sidebar with Logo -->
    <section class="right-sidebar">
        <div class="sidebar-logo">
            <img src="images/logo.png" alt="School Logo">
        </div>
        <div class="sidebar-content">
            <h3>SMPN 2 PRAMBON</h3>
            <p>SMP Negeri 2 Prambon adalah salah satu sekolah negeri yang terletak di Kabupaten Sidoarjo, Provinsi Jawa Timur. Sekolah ini berlokasi di Jl. Raya Prambon, Desa Kajartengguli, Kecamatan Prambon, dan berada di bawah naungan Dinas Pendidikan Kabupaten Sidoarjo. Sekolah ini merupakan sekolah negeri baru yang dibangun oleh pemerintah daerah sebagai bentuk komitmen dalam pemerataan akses pendidikan. SMP Negeri 2 Prambon menjadi sekolah negeri kedua di Kecamatan Prambon, yang sebelumnya hanya memiliki satu SMP Negeri. SMP Negeri 2 Prambon dibangun pada tahun 2023 dan diresmikan pada bulan maret 2024.</p>
        </div>
    </section>

    <!-- Main Content Container -->
    <div class="main-container">
        <!-- Vision and Mission Section -->
        <div class="vision-mission-section">
            <!-- Vision Card -->
            <div class="vision-card">
                <div class="header">
                    <i class="fas fa-eye"></i>
                    <h3>VISI</h3>
                </div>
                <ol>
                    <li>Unggul dalam berprestasi</li>
                    <li>Unggul dalam berkarakter</li>
                    <li>Unggul dalam berkreativitas</li>
                    <li>Unggul dalam beriman dan bertakwa</li>
                    <li>Unggul dalam kemampuan akademik dan non akademik serta taat pada aturan</li>
                    <li>Unggul dalam kepedulian teknologi lingkungan</li>
                    <li>Unggul dalam kepedulian lingkungan</li>
                </ol>
            </div>

            <!-- Mission Card -->
            <div class="mission-card">
                <div class="header">
                    <i class="fas fa-bullseye"></i>
                    <h3>MISI</h3>
                </div>
                <ol>
                    <li>Mewujudkan sistem organisasi terpercaya untuk meningkatkan kualitas sekolah menyesuaikan kebutuhan</li>
                    <li>Mewujudkan layanan yang bermutu pada orang tua/wali murid</li>
                    <li>Mewujudkan lingkungan yang berseria, indah dan nyaman</li>
                    <li>Meningkatkan kualitas keimanan dan ketakwaan siswa</li>
                    <li>Mengoptimalkan proses pembelajaran yang efektif dan efisien dengan memanfaatkan teknologi informasi dan komunikasi</li>
                    <li>Mengoptimalkan potensi siswa dengan berbagai kegiatan intrakurikuler dan ekstrakurikuler yang mengembangkan prestasi</li>
                    <li>Mewujudkan lingkungan yang bersih, sehat, dan bersahabat</li>
                    <li>Mengupayakan lingkungan yang aman dan sehat</li>
                    <li>Mewujudkan sekolah adiwiyata yang peduli lingkungan</li>
                    <li>Mewujudkan pembelajaran yang berwawasan</li>
                </ol>
            </div>
        </div>

        <!-- Quote Section -->
        <div class="quote-section">
            <p>"Mewujudkan peserta didik yang <span class="quote-highlight">berkarakter</span>, <span class="quote-highlight">berprestasi</span>, dan <span class="quote-highlight">peduli lingkungan</span>."</p>
        </div>
    </div>

    <!-- Footer -->
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
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const hamburger = document.getElementById('hamburger');
        const navbarMenu = document.getElementById('navbar-menu');

        hamburger.addEventListener('click', () => {
            navbarMenu.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !navbarMenu.contains(e.target)) {
                navbarMenu.classList.remove('active');
            }
        });

        // Close menu when clicking on menu items
        const menuItems = document.querySelectorAll('.navbar-menu a');
        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                navbarMenu.classList.remove('active');
            });
        });
    </script>
</body>
</html>