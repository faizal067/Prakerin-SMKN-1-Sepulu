<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prakerin SMKN 1 Sepulu</title>

    <!--Font Awasome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Font Poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&family=Signika:wght@600&display=swap"
    rel="stylesheet">
    <!--CSS-->
    <!-- <link rel="stylesheet" href="swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="{{asset('page/landingpage.css')}}">
</head>
<body>
<header>
    <div class="navbar">
        <div class="container">
            <div class="box-navbar">
                <div class="logo">
                <img src="{{asset('page/img/smkn_1_sepulu1.png')}}" alt="" width="50px" height="60px" style="float: left;"><h1>SMK Negeri 1 Sepulu</h1>
            </div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#information">Information</a></li>
                <li><a href="#kontak">Kontak</a></li>
                <li></li>
                <li class="active"><a href="/login">Masuk</a></li>
            </ul>
            <i class="fa-solid fa-bars menu-bar"></i>
            </div>
        </div>
    </div>
    <div class="hero">
        <div class="container">
            <div class="box-hero">
                <div class="box">
                <h1>Prakerin <br>SMKN 1 Sepulu <br>Memupuk Karakter Industri</h1>
                <p>Prakerin ini diharapkan dapat memupuk karakter siswa agar
                dapat berinteraksi dengan dunia kerja</p>
                <a href="/review" class="button">Review</a>
                </div>
                <div class="box">
                    <img src="{{asset('page/img/siswa.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</header>
<h2>Tujuan Prakerin</h2>
<!--Information-->
<div class="services" id="information">
    <div class="container">
        <div class="box-services">
            <div class="box">
               <i class="fa-solid fa-newspaper"></i>
               <h4>Solusi Bagi Kedisiplinan</h4>
               <p>Adanya prakerin dapat memberikan stimulus kepada siswa agar belajar disiplin</p>
            </div>
            <div class="box">
               <i class="fa-solid fa-person-running"></i>
               <h4>Manajemen Diri</h4>
               <p>Adanya prakerin dapat memberikan stimulus kepada siswa agar belajar disiplin</p>
            </div>
            <div class="box">
               <i class="fa-solid fa-people-arrows"></i>
               <h4>Relasi</h4>
               <p>Adanya prakerin dapat memberikan stimulus kepada siswa agar belajar disiplin</p>
            </div>
        </div>
    </div>
</div>
<!--Information-->
<!--Industri-->
<div class="pantai" id="industri">
    <div class="container"><h2>Industri</h2>
        <div class="slide">
            <div class="balik">
                <span id="slide-1" class="auto"></span>
                <span id="slide-2" class="auto"></span>
                <span id="slide-3" class="auto"></span>
                <span id="slide-4" class="auto"></span>
                <span id="slide-5" class="auto"></span>
                <span id="slide-6" class="auto"></span>
                <span id="slide-7" class="auto"></span>
                <span id="slide-8" class="auto"></span>
                <div class="card">
                    <img src="{{asset('page/img/ipb.png')}}">
                    <img src="{{asset('page/img/ui.png')}}">
                    <img src="{{asset('page/img/unsoed.png')}}">
                    <img src="{{asset('page/img/Undip.png')}}">
                    <img src="{{asset('page/img/ITB .png')}}">
                    <img src="{{asset('page/img/Unair.png')}}">
                    <img src="{{asset('page/img/ugm.png')}}">
                    <img src="{{asset('page/img/its.png')}}">
                </div>
                <div class="tulis">
                    <h3>Lokasi Prakerin SMK Negeri 1 Sepulu</h3><br>
                    <a href="/tampilkan" class="button">Detail</a>
                </div>
            </div>
            <div class="nav">
                <a href="#slide-1">1</a>
                <a href="#slide-2">2</a>
                <a href="#slide-3">3</a>
                <a href="#slide-4">4</a>
                <a href="#slide-5">5</a>
                <a href="#slide-6">6</a>
                <a href="#slide-7">7</a>
                <a href="#slide-8">8</a>
            </div>
        </div>
    </div>
</div>
<!--Kontak-->
<div class="daftar" id="kontak">
    <div class="container">
        <div class="box-daftar">
            <h1>Ingin mengetahui info lebih lanjut <br> mengenai prakerin ?</h1>
            <h3>Klik link di bawah ini !</h3>
            <a class="btn btn-primary" href="https://www.instagram.com/ossmeksapul/#" role="button"><i class="fa-brands fa-instagram"></i> SMK Negeri 1 Sepulu</a>
            <a class="btn btn-primary" href="https://wa.me/6285730344035/#" role="button"><i class="fa-brands fa-whatsapp"></i> Halimatu Sa'diyah</a>
            <a class="btn btn-primary" href="mailto:smkn1sepulu@gmail.com" role="button"><i class="fa-regular fa-envelope"></i> smkn1sepulu@gmail.com</a>
        </div>
    </div>
</div>
<!--Footer-->
<div class="footer">
    <div class="container">
        <div class="box-footer">
            <div class="box">
                <h3>Prakerin SMKN 1 Sepulu</h3>
                <p>Jl. Raya Sepulu No.89 A, Sepuluh, Sepulu, Kec. Sepulu, Kabupaten Bangkalan, Jawa Timur 69154</p>
            </div>
            <div class="box">
                <h3>Menu</h3>
                <a href="#home">Home</a>
                <a href="#information">Information</a>
                <a href="#kontak">Kontak</a>

                <a href="/login">Masuk</a>
            </div>
            <div class="box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.873586477211!2d112.95698772694573!3d-6.8981633775283075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd815a9995c8dfb%3A0x5099f6341df075b2!2sSMKN%201%20Sepulu!5e0!3m2!1sid!2sid!4v1678095505427!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="box">
                <p>&copy; Copyright by <span>Faizal Reza Rahmansyah</span>
                All Rights Reserved 2023, Indonesia</p>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('page/landingpage.js')}}"></script>


</body>
</html>
