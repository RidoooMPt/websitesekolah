<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 Prambon @yield('title')</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Spendapra" />
            <div class="logo-text">
                <h1>SPENDAPRA</h1>
                <p>SMPN 2 PRAMBON</p>
            </div>
        </div>
        <div class="hamburger" id="hamburger">
            <i class="fas fa-ellipsis-v"></i>
        </div>
        <nav id="nav-menu">
            <ul class="active">
                <li><a href="home.blade.php">Home</a></li>
                <li><a href="tentang.blade.php">Tentang Spendapra</a></li>
                <li><a href="akademik.blade.php">Akademik</a></li>
                <li><a href="profil_guru.blade.php">Profil Guru</a></li>
                <li><a href="pendaftaran.blade.php">Pendaftaran</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="Signin.php">Sign In</a></li>
            </ul>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="header">
                <img src="{{ asset('images/logo.png') }}" alt="Logo SMPN 2 Prambon" class="logo">
                <div class="title">
                    <h1>SPENDAPRA</h1>
                    <div class="badge">SMPN 2 PRAMBON</div>
                </div>
            </div>
            
            <div class="card">
                <div class="contact-info">
                    <p><b>Alamat :</b> Jl. Raya Prambon Kajartengguli, Kec. Prambon, Kab Sidoarjo, Jawa Timur.</p>
                    <p><b>WA :</b> 081233518800</p>
                    <p><b>Instagram :</b> @smpn2_prambon</p>
                    <p><b>Email :</b> Spendapra@gmail.com</p>
                </div>
                
                <div class="map-section">
                    <h2>Lokasi Sekolah</h2>
                    <iframe width="560" height="315" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506309.0252272155!2d112.59951496494749!3d-7.516003256430377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780b0029c5ca87%3A0x2bedf254132eb7fe!2sSMPN%202%20PRAMBON!5e0!3m2!1sid!2sid!4v1749081920833!5m2!1sid!2sid" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>  
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>