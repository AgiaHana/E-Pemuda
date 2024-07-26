<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi E-PEMUDA</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="header" id="home">
        <nav class="navbar navbar-top">
            <a href="#" class="logo"></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Partnership</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        
        <div class="hero">
            <img src="{{asset('images/logopt.png')}}" alt="" class="hero-img">
            <h1 class="hero-title">Welcome to E-PEMUDA</h1>
            <p class="hero-description">Dapatkan kemudahan dalam mencatat, menyimpan, dan mengakses notulensi rapat serta <br> data anggota kapan saja dan di mana saja. E-Pemuda, platform terbaik untuk organisasi pemuda!</p>
            <a href="{{ route('login') }}" class="cta-button" style="margin-top: 80px; margin-bottom: 80px;">Login</a>
        </div>
    </header>

    <section class="about" id="about">
        <h1 style="text-align: center;" class="font-about">About Us</h1>
        <div style="display: flex;">
            <img src="{{asset('images/logopt.png')}}" alt="">
            <p style="margin-left: 80px">E-Pemuda adalah platform inovatif yang dirancang khusus untuk membantu organisasi pemuda dalam mengelola notulensi rapat dan data anggota. Dengan E-Pemuda, Anda bisa mencatat, menyimpan, dan mengakses notulensi rapat dengan mudah dan efisien. Selain itu, E-Pemuda memungkinkan Anda untuk mengelola data anggota dengan lebih terorganisir, memastikan informasi selalu up-to-date dan mudah diakses kapan saja. Didesain dengan antarmuka yang ramah pengguna, E-Pemuda membantu meningkatkan produktivitas dan kinerja organisasi Anda, sehingga Anda bisa fokus pada kegiatan dan program yang lebih penting.</p>
        </div>
    </section>

    {{-- <section class="partnership" id="partnership">
        <h2 class="font-about" style="text-align: center">Partnership</h2>
        <div class="service">
            <h3>Karya Muda Padukuhan Mendiro</h3>
            <img src="{{ asset('images/mendiro.png') }}" alt="Deskripsi gambar">
        </div>
    </section> --}}

    <section id="partnership">
        <h2 class="font-about" style="text-align: center">Partnership</h2>
        <p>E-Pemuda berkolaborasi dengan berbagai mitra untuk menciptakan dampak positif yang lebih luas. Kami bekerja sama dengan organisasi yang berbagi visi kami dalam memberdayakan pemuda dan meningkatkan kualitas komunitas. Bersama-sama, kami berkomitmen untuk mencapai tujuan yang lebih besar dan lebih baik.</p>
        <div class="partners">
            <div class="partner">
                <img src="{{asset('images/patner1abu.png')}}" alt="Partner 1" class="logo">
                <img src="{{asset('images/patner1.png')}}" alt="Partner 1 Color" class="logo color">
            </div>
            <div class="partner">
                <img src="{{asset('images/patner2abu.png')}}" alt="Partner 2" class="logo">
                <img src="{{asset('images/patner2.png')}}" alt="Partner 2 Color" class="logo color">
            </div>
            <div class="partner">
                <img src="{{asset('images/patner3abu.png')}}" alt="Partner 3" class="logo">
                <img src="{{asset('images/patner3.png')}}" alt="Partner 3 Color" class="logo color">
            </div>
            <!-- Tambahkan lebih banyak partner sesuai kebutuhan -->
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 style="text-align: center;" class="font-about">Contact Us</h2>
        <ul class="contact-list" style="align-items: center; justify-content:center;">
            <li>Instagram: <a href="https://instagram.com/yourprofile">@yourprofile</a></li>
            <li>Facebook: <a href="https://facebook.com/yourprofile">Your Profile</a></li>
            <li>Nomor Telepon: <a href="tel:+621234567890">+62 123 456 7890</a></li>
        </ul>
    </section>

    {{-- <footer class="footer">
        <p>&copy; 2024 Karang Taruna. All rights reserved.</p>
        
    </footer> --}}
    <!-- Tombol Back to Home -->
    <a href="#home" class="back-to-home-button">
        <i class="fas fa-arrow-up"></i>
    </a>
</body>
</html>
