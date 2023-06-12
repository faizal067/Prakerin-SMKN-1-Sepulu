<!DOCTYPE html>
<html lang="en">
<style>
    *{
    margin: 0;
    padding: 0;
}
.container{
    background: white;
    border: 10x solid;
    width: 350px;
    height: 500px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}
.info img{
    border-radius: 50%;
    width: 170px;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
}
.info h1{
    text-align: center;
    font-family: 'Courier New', Courier, monospace;
    bottom: 50px;
}
.info h3{
    text-align: center;
    font-family: 'Courier New', Courier, monospace;
}


</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Card Siswa</title>
    <link rel="stylesheet" href="idcard.css">
</head>

<body>
    @foreach ($data as $row)
    <div class="container">
        <div class="bg">

        </div>
        <div class="info">
            <img src="{{asset('fotodaftar/'.$row->foto)}}" alt="" style="width: 10px">
            <h1> ID Card Peserta Magang</h1>
            <h3>Nama        : {{$row->nama}}</h3>
            <h3>Kelas       : {{$row->kelas}}</h3>
            <h3>Jurusan     :{{$row->jurusan}}</h3>
            <h3>Alamat      :{{$row->alamat}}</h3>
            <h3>Jenis Kelamin : {{$row->jeniskelamin}}</h3>
            <h3>Agama       : {{$row->agama}}</h3>
            <h3>Industri    : {{$row->industri}}</h3>
            <h3>No. Telepon : {{$row->notelp}}</h3>
            <h3>Keahlian    : {{$row->keahlian}}</h3>
            <h3>Status      :<label class="label {{($row->is_accepted == 1) ? 'label-success' : 'label-danger'}}">
                {{($row->is_accepted == 1) ? 'Disetujui' : 'Tidak disetujui' }}</label></h3>
        </div>
    </div>
    @endforeach
</body>

</html>
