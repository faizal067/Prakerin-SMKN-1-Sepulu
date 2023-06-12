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
    </style>
</head>
<body>
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
</body>
</html>
