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
        .footer {
            background-color: #f1f1f1;
            padding: 20px 0;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .footer-left, .footer-right {
            flex: 1;
        }
        .footer-social {
            display: flex;
            gap: 10px;
        }
        .footer-social .social-link img {
            width: 24px;
            height: 24px;
        }
        .footer-right {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
        }
        .footer-right a {
            text-decoration: none;
            color: #333;
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
                    <p>"Platform ini telah mengubah hidup saya. Kursusnya luar biasa!"</p>
                    <h3>John Doe</h3>
                    <h4>IT Support</h4>
                </div>
                <div class="testimonial-card">
                    <p>"Investasi terbaik yang pernah saya lakukan dalam pendidikan saya."</p>
                    <h3>Jane Smith</h3>
                    <h4>Penjahit Profesional</h4>
                </div>
                <div class="testimonial-card">
                    <p>"Kursus ini sangat membantu saya dalam karir profesional saya."</p>
                    <h3>Ahmad</h3>
                    <h4>Desainer Grafis</h4>
                </div>
                <div class="testimonial-card">
                    <p>"Pembelajaran yang sangat efektif dan menyenangkan."</p>
                    <h3>Siti</h3>
                    <h4>Guru Bahasa</h4>
                </div>
                <div class="testimonial-card">
                    <p>"Materi yang disampaikan sangat mudah dipahami dan aplikatif."</p>
                    <h3>Rizky</h3>
                    <h4>Analisis Bisnis</h4>
                </div>
            </div>
            
        </section>

        <!-- Contact Us Section -->
        <section id="kontak" class="contact-section">
            <div class="container">
                <div class="section-content" style="display:flex ; flex-direction : column ; align-items: center;">
                    <h2 class="section-title">Butuh Bantuan?</h2>
                    <p class="section-description">Dengan Senang Hati Kami Menjawab</p>
                </div>
                <div class="contact-options">
                    <div class="contact-option" id="email-contact">
                        <h3>Kirimkan Kami Email</h3>
                        <p>Akan Kami Balas dalam 24 Jam</p>
                        <button class="contact-button">Email Kami</button>
                    </div>
                    <div class="contact-option" id="chat-contact">
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
                    <p>&copy; 2024 VocaTech. All rights reserved.</p>
                </div>
                <div class="footer-right">
                    <a href="https://www.instagram.com/zollahrp/" class="social-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.334 3.608 1.31.976.975 1.248 2.242 1.31 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.334 2.633-1.31 3.608-.975.976-2.242 1.248-3.608 1.31-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.334-3.608-1.31-.976-.975-1.248-2.242-1.31-3.608C2.175 15.747 2.163 15.367 2.163 12s.012-3.584.07-4.849c.062-1.366.334-2.633 1.31-3.608.975-.976 2.242-1.248 3.608-1.31C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.053.072 5.763.13 4.52.387 3.414 1.493 2.307 2.6 2.05 3.843 1.992 5.133.933 6.412.92 6.821.92 10.08c0 3.259.013 3.668.072 4.947.058 1.29.315 2.533 1.422 3.639 1.106 1.106 2.349 1.363 3.639 1.422 1.279.058 1.688.072 4.947.072s3.668-.013 4.947-.072c1.29-.058 2.533-.315 3.639-1.422 1.106-1.106 1.363-2.349 1.422-3.639.058-1.279.072-1.688.072-4.947s-.013-3.668-.072-4.947c-.058-1.29-.315-2.533-1.422-3.639C19.48.387 18.237.13 16.947.072 15.668.013 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.202a4.04 4.04 0 1 1 0-8.081 4.04 4.04 0 0 1 0 8.081zm6.406-11.845a1.44 1.44 0 1 0-2.88 0 1.44 1.44 0 0 0 2.88 0z" fill="#000"/>
                        </svg>
                    </a>
                    <a href="https://github.com/mirfan777/sinap" class="social-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 .5C5.651.5.5 5.651.5 12c0 5.084 3.292 9.372 7.863 10.886.575.105.787-.25.787-.556 0-.275-.01-1.007-.015-1.976-3.198.695-3.872-1.545-3.872-1.545-.522-1.33-1.275-1.686-1.275-1.686-1.043-.713.08-.699.08-.699 1.152.08 1.756 1.183 1.756 1.183 1.025 1.754 2.691 1.247 3.345.953.105-.742.4-1.246.727-1.533-2.552-.291-5.237-1.276-5.237-5.678 0-1.254.447-2.279 1.178-3.08-.12-.292-.508-1.465.11-3.053 0 0 .957-.307 3.135 1.175.91-.253 1.885-.38 2.855-.384.97.004 1.945.131 2.856.384 2.177-1.482 3.132-1.175 3.132-1.175.619 1.588.232 2.761.114 3.053.733.801 1.178 1.826 1.178 3.08 0 4.412-2.688 5.382-5.248 5.666.412.353.78 1.043.78 2.102 0 1.518-.013 2.742-.013 3.116 0 .308.209.666.79.555C20.708 21.369 24 17.084 24 12c0-6.349-5.151-11.5-12-11.5z" fill="#000"/>
                        </svg>
                    </a>
                    <a href="https://devpost.com/ababilpuusano" class="social-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L1.5 9.5v5L12 22l10.5-7.5v-5L12 2zm0 1.6l8.813 6.296v3.208L12 19.4 3.187 13.104V9.896L12 3.6zm0 4.4a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0 1.6a2.4 2.4 0 1 0 0 4.8 2.4 2.4 0 0 0 0-4.8z" fill="#000"/>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>

        <script src="./js/script.js"></script>
</body>

</html> 