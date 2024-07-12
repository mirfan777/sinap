<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        html {
            scroll-behavior: smooth;
            }
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
</head>

<body>

    <!-- Navbar -->
    <header>
        <nav>
            <div class="logo">
                <img src="{{asset('images/logo.png')}}" alt="SINAP Logo">
            </div>
            <ul>
                <li><a href="#beranda" class="active">Beranda</a></li>
                <li><a href="#kursus">Kursus</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
                <li><a href="#kontak">Kontak Kami</a></li>
            </ul>
            <div class="auth-buttons">
                <button class="sign-up"><a href="./register">Registrasi</a></button>
                <button class="sign-in"><a href="./login">Login</a></button>
            </div>
        </nav>
    </header>
    <main>
        
        <!-- Hero -->
        <section id="beranda" class="hero">
            <div class="hero-content">
                <h1>Buatlah Masa Depan Mu Menjadi Lebih Baik</h1>
                <p>Tidak ada kata terlambat untuk berubah, tidak ada kata percuma dalam perbuatan. Mari melangkah maju
                    dan terus merubah diri menjadi lebih baik.</p>
                <div class="hero-buttons">
                    <button class="get-started">Get Started</button>
                    <button class="watch-video">Watch Video</button>
                </div>
                <div class="certificate">
                    <img src="https://cdn-icons-png.flaticon.com/512/1827/1827380.png" alt="Certificate Icon" class="certificate-icon">
                    <div class="certificate-text">
                        <p>Certificate</p>
                        <span>There are certificates for all courses.</span>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{asset('images/mantan napi.png')}}" alt="Hero Image">
            </div>
        </section>

        <!-- Parameters -->
        <section class="stats">
            <div class="stat">
                <h2>1768</h2>
                <p>Mantan Narapidana <br> yang Terbantu</p>
            </div>
            <div class="stat">
                <h2>100+</h2>
                <p>Mentor Profesional</p>
            </div>
            <div class="stat">
                <h2>240+</h2>
                <p>Kursus Berkualitas</p>
            </div>
        </section>

        <!-- Kursus Paling Populer -->
        <section id="kursus" class="popular-courses">
            <div class="popular-courses-inner">
                <h2>Kursus  <br> Paling <br> Populer</h2>
                <div class="course-container">
                    <div class="course-card">
                        <div class="course-image">
                            <img src="{{asset('images/kursus-bahasa.jpg')}}" alt="Course Image">
                        </div>
                        <div class="course-details">
                            <div class="course-title">Berlatih Bahasa Inggris</div>
                            <div class="course-rating">★ ★ ★ ★ ☆ (4)</div>
                            <div class="course-price">Rp 25.000</div>
                            <button class="course-arrow">→</button>
                        </div>
                    </div>
                    <div class="course-card">
                        <div class="course-image">
                            <img src="{{asset('images/kursus-basicit.jpg')}}" alt="Course Image">
                        </div>
                        <div class="course-details">
                            <div class="course-title">Lancar MS. Office</div>
                            <div class="course-rating">★ ★ ★ ★ ☆ (4)</div>
                            <div class="course-price">Gratis</div>
                            <button class="course-arrow">→</button>
                        </div>
                    </div>
                    <div class="course-card">
                        <div class="course-image">
                            <img src="{{asset('images/kursus-masak.jpg')}}" alt="Course Image">
                        </div>
                        <div class="course-details">
                            <div class="course-title">Terampil Memasak</div>
                            <div class="course-rating">★ ★ ★ ★ ☆ (4)</div>
                            <div class="course-price">Gratis</div>
                            <button class="course-arrow">→</button>
                        </div>
                    </div>
                    <div class="course-card">
                        <div class="course-image">
                            <img src="{{asset('images/kursus-melukis.jpg')}}" alt="Course Image">
                        </div>
                        <div class="course-details">
                            <div class="course-title">Pandai Melukis</div>
                            <div class="course-rating">★ ★ ★ ★ ☆ (4)</div>
                            <div class="course-price">Gratis</div>
                            <button class="course-arrow">→</button>
                        </div>
                    </div>
                    <div class="course-card">
                        <div class="course-image">
                            <img src="{{asset('images/kursus-menolong.jpg')}}" alt="Course Image">
                        </div>
                        <div class="course-details">
                            <div class="course-title">Belajar Berbisnis</div>
                            <div class="course-rating">★ ★ ★ ★ ☆ (4)</div>
                            <div class="course-price">Rp 30.000</div>
                            <button class="course-arrow">→</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <div class="indicator active"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
            </div>
            <div class="carousel-controls">
                <button class="carousel-prev">←</button>
                <button class="carousel-next">→</button>
            </div>
        </section>
        
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <p>Silakan masuk atau daftar akun untuk bisa memakai fitur ini</p>
            </div>
        </div>        

        <section id="fitur" class="features">
            <div class="features-inner">
                <div class="feature-title">
                    <h2>Fitur Kami</h2>
                </div>
                <div class="feature-list">
                    <div class="feature-item">
                        <div class="feature-header">
                            <span class="icon">🎓</span>
                            <h3>Kursus Lengkap</h3>
                        </div> <br>
                        <p>Dapatkan pelatihan komprehensif dengan materi yang telah dirancang oleh para ahli untuk memaksimalkan pembelajaran Anda.</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-header">
                            <span class="icon">📜</span>
                            <h3>Sertifikasi</h3>
                        </div> <br>
                        <p>Peroleh sertifikasi resmi yang diakui untuk meningkatkan kredibilitas dan kesempatan karier Anda.</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-header">
                            <span class="icon">💼</span>
                            <h3>Pencarian Pekerjaan</h3>
                        </div> <br>
                        <p>Dapatkan akses ke berbagai peluang kerja yang sesuai dengan keterampilan dan minat Anda.</p>
                    </div>                    
                </div>
            </div>
        </section>         
        
        <section id="kontak" class="contact">
            <div class="contact-inner">
                <h3>Punya Pertanyaan?</h3>
                <button class="contact-button">Hubungi Kami</button>
            </div>
        </section>        <br> <br>

        <section id="testimoni" class="testimonials">
            <h2>Testimoni</h2>
            <div class="testimonials-container">
                <div class="testimonial-card">
                    <img src="avatar1.jpg" alt="User Avatar" class="avatar">
                    <p>"Platform ini telah mengubah hidup saya. Kursusnya luar biasa!"</p>
                    <h3>John Doe</h3>
                    <h4>IT Support</h4>
                </div>
                <div class="testimonial-card">
                    <img src="avatar2.jpg" alt="User Avatar" class="avatar">
                    <p>"Investasi terbaik yang pernah saya lakukan dalam pendidikan saya."</p>
                    <h3>Jane Smith</h3>
                    <h4>Penjahit Profesional</h4>
                </div>
                <div class="testimonial-card">
                    <img src="avatar3.jpg" alt="User Avatar" class="avatar">
                    <p>"Kursus ini sangat membantu saya dalam karir profesional saya."</p>
                    <h3>Ahmad</h3>
                    <h4>Desainer Grafis</h4>
                </div>
                <div class="testimonial-card">
                    <img src="avatar4.jpg" alt="User Avatar" class="avatar">
                    <p>"Pembelajaran yang sangat efektif dan menyenangkan."</p>
                    <h3>Siti</h3>
                    <h4>Guru Bahasa</h4>
                </div>
                <div class="testimonial-card">
                    <img src="avatar5.jpg" alt="User Avatar" class="avatar">
                    <p>"Materi yang disampaikan sangat mudah dipahami dan aplikatif."</p>
                    <h3>Rizky</h3>
                    <h4>Analisis Bisnis</h4>
                </div>
            </div>
            
        </section>

        <!-- Contact Us Section -->
        <section id="kontak" class="contact-section">
            <div class="container">
                <div class="section-content">
                    <h2 class="section-title">Butuh Bantuan?</h2>
                    <p class="section-description">Dengan Senang Hati Kami Menjawab</p>
                </div>
                <div class="contact-options">
                    <div class="contact-option" id="email-contact">
                        <div class="contact-icon">
                            <img src="email-icon.png" alt="Email Icon">
                        </div>
                        <h3>Kirimkan Kami Email</h3>
                        <p>Akan Kami Balas dalam 24 Jam</p>
                        <button class="contact-button">Email Kami</button>
                    </div>
                    <div class="contact-option" id="chat-contact">
                        <div class="contact-icon">
                            <img src="chat-icon.png" alt="Chat Icon">
                        </div>
                        <h3>Chat Kami</h3>
                        <p>Hubungi Kita Secepat Mugkin</p>
                        <button class="contact-button">Chat Sekarang</button>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <div class="faq">
                    <div class="faq-item">
                        <h3>Bisakah aku mencoba pelatihan secara gratis?</h3>
                        <p>Ada banyak pelatihan kami yang gratis untuk digunakan.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Apakah ada pembayaran tersembunyi?</h3>
                        <p>Tidak ada!!</p>
                    </div>
                    <div class="faq-item">
                        <h3>Metode pembayaran apa saja yang kamu terima?</h3>
                        <p>Transfer Bank dan E-Wallet.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Seberapa sering kamu melakukan pembaruan?</h3>
                        <p>Kami melakukan pembaruan 2 bulan sekali.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-left">
                    <p>&copy; 2024 SINAP. All rights reserved.</p>
                </div>
                <div class="footer-social">
                    <a href="#" class="social-link"><img src="icons/facebook.svg" alt="Facebook"></a>
                    <a href="#" class="social-link"><img src="icons/twitter.svg" alt="Twitter"></a>
                    <a href="#" class="social-link"><img src="icons/google-plus.svg" alt="Google+"></a>
                    <a href="#" class="social-link"><img src="icons/dribbble.svg" alt="Dribbble"></a>
                </div>
                <div class="footer-right">
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                    <a href="#">Affiliates</a>
                </div>
            </div>
        </footer>

        <script src="./js/script.js"></script>
</body>

</html> 