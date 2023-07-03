<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Website</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins";
        }
        .main{
            width: 100%;
            height: 100vh;
            background-color: #333;
            padding: 0 11%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family: "Poppins";
        }
        .img img{
            width: 400px;
            padding: 0 10%;
        }
        .text h1{
            font-family: 58px;
            color: white;
            position: relative;
        }
        .text h1::after{
            position: absolute;
            content: "";
            width: 20%;
            height: 4px;
            background-color: tomato;
            left: 0;
            bottom: 2px;
        }
        .text p{
            font-size: 15px;
            color: white;
            line-height: 28px;
            margin: 30px 0 45px 0;
            max-width: 480;
        }
        .btn{
            padding: 7px 25px;
            border: 2px solid tomato;
            border-radius: 5px;
            color: tomato;
            text-decoration: none;
            margin-right: 15px;
            transition: all .5s ease;
        }
        .btn:hover{
            background-color: tomato;
            color: #333;
        }
        .btn1{
            background-color: tomato;
            color: #333;
        }
        .btn1:hover{
            background-color: transparent;
            color: tomato;
        }
        .menu-bar{
            z-index: 100;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Font Poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&family=Signika:wght@600&display=swap"
    rel="stylesheet">
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
</header>
<div class="main">
    <div class="img">
        <img src="{{asset('page/img/smk.jpeg')}}" alt="">
    </div>
    <div class="text">
        <h1>Mengenai Website</h1>
        <p>
            Website ini dibuat untuk memenuhi kebutuhan siswa dalam kegitan prakerin.
            Website ini dilengkapi dengan fitur-fitur yang dapat membantu siswa dalam memenuhi segala aspek
            berupa pendaftaran, lokasi, logbook, absensi,  dan fitur kebutuhan yang dibutuhkan oleh industri.
            Website ini diperuntukkan bagi sekolah dalam memonitorin siswa selama kegiatan prakerin.
        </p>
        <div class="button">
            <a href="/tampilkan" class="btn btn1">Detail Lokasi Prakerin</a>
            <a href="/" class="btn btn1">Back</a>
        </div>
    </div>
</div>
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
