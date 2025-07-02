<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMPN 2 prambon - kritiknsaran</title>
    <style>
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
            --border-radius: 15px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e8f5f3 0%, #f0f8f6 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Header Styles */
        .header {
            background: var(--card-bg);
            padding: 60px 0;
            box-shadow: var(--shadow);
            position: relative;
            z-index: 10;
        }

        .header-container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 2200px;
            padding: 15px 20px;
            background: rgba(0, 129, 114, 0.4);
        }

        .logo {
            width: 90px;
            height: 90px;
            margin-right: 20px;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .header-title {
            text-align: center;
        }

        .header-title h1 {
            font-size: 55px;
    font-weight: bolder;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.48);
    margin-bottom: 10px;
    letter-spacing: 2px;
    color: var(--spendapra-green);
    -webkit-text-stroke: 2px white;
    line-height: 1.1;
        }

        .header-badge {
            font-size: 15px;
    background: var(--spendapra-green);
    color: var(--text-light);
    padding: 5px 40px;
    border-radius: 50px;
    font-weight: 600;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1), 
                0 0 0 2px white;
    display: inline-block;
    box-sizing: border-box;
        }

        /* Main Content */
        .main-content {
            position: relative;
            padding: 80px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 200px);
        }

        /* Decorative Elements */
        .geometric-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .shape {
            position: absolute;
            border-radius: 10px;
        }

        .shape-1 {
            width: 200px;
            height: 300px;
            background: var(--spendapra-green);
            top: 20%;
            left: 5%;
            transform: rotate(-15deg);
            opacity: 0.8;
        }

        .shape-2 {
            width: 150px;
            height: 200px;
            background: var(--spendapra-orange);
            top: 10%;
            left: 10%;
            transform: rotate(25deg);
            opacity: 0.9;
        }

        .shape-3 {
            width: 180px;
            height: 250px;
            background: var(--spendapra-green);
            bottom: 15%;
            right: 5%;
            transform: rotate(15deg);
            opacity: 0.8;
        }

        .shape-4 {
            width: 120px;
            height: 180px;
            background: var(--spendapra-orange);
            bottom: 20%;
            right: 10%;
            transform: rotate(-20deg);
            opacity: 0.9;
        }

        /* Form Card */
        .form-card {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 500px;
            position: relative;
            z-index: 5;
        }

        .form-title {
            text-align: center;
            color: var(--text-dark);
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            color: var(--text-dark);
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f9f9f9;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--spendapra-green);
            background: var(--card-bg);
            box-shadow: 0 0 0 3px rgba(74, 155, 142, 0.1);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #999;
            font-style: italic;
        }

        .form-group textarea {
            resize: vertical;
            height: 120px;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: var(--spendapra-green);
            color: var(--text-light);
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background: var(--spendapra-dark-green);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 169, 150, 0.3);
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

        .map iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-title h1 {
                font-size: 2rem;
            }

            .form-card {
                margin: 20px;
                padding: 30px 25px;
            }

            .shape-1, .shape-2, .shape-3, .shape-4 {
                opacity: 0.5;
            }

            .card-footer {
                flex-direction: column;
                gap: 30px;
                padding: 70px 30px 40px;
            }

            .map-section-footer {
                align-items: center;
            }

            .map {
                width: 100%;
                max-width: 300px;
            }

            .header-footer {
                left: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <img src="images/logo.png">
            </div>
            <div class="header-title">
                <h1>SPENDAPRA</h1>
                <div class="header-badge">SMP NEGERI 2 PRAMBON</div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Decorative Background -->
        <div class="geometric-bg">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>

        <!-- Form Card -->
        <div class="form-card">
            <h2 class="form-title">Kritik & Saran</h2>
            <form id="kritikSaranForm">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                </div>

                <div class="form-group">
                    <label for="kritik">Kritik:</label>
                    <textarea id="kritik" name="kritik" placeholder="Masukkan Kritik" required></textarea>
                </div>

                <div class="form-group">
                    <label for="saran">Saran:</label>
                    <textarea id="saran" name="saran" placeholder="Masukkan Saran" required></textarea>
                </div>

                <button type="submit" class="submit-btn">Kirim</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
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
        document.getElementById('kritikSaranForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = {
                nama: document.getElementById('nama').value,
                email: document.getElementById('email').value,
                kritik: document.getElementById('kritik').value,
                saran: document.getElementById('saran').value
            };
            
            // Simple validation
            if (!formData.nama || !formData.email || !formData.kritik || !formData.saran) {
                alert('Harap isi semua field!');
                return;
            }
            
            // Simulate form submission
            alert('Terima kasih atas kritik dan saran Anda!');
            
            // Reset form
            this.reset();
        });

        // Add smooth scrolling for better UX
        document.addEventListener('DOMContentLoaded', function() {
            // Add some animation to form elements
            const formCard = document.querySelector('.form-card');
            formCard.style.opacity = '0';
            formCard.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                formCard.style.transition = 'all 0.6s ease';
                formCard.style.opacity = '1';
                formCard.style.transform = 'translateY(0)';
            }, 200);
        });
    </script>
</body>
</html>