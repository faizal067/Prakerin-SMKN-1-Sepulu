<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Magang</title>
    <style>
        table tr td{
            font-size: 13px;
        }
        table tr .text{
            text-align: right;
            text-justify: auto;
            font-size: 13px;
        }
        table tr .text2{
            text-align: center;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <center>
        <table >
            <tr>
                <td>
                    {{-- <img src="{{asset('page/img/smkn_1_sepulu1.png')}}" alt="" width="100px"> --}}
                </td>
                <td>
                    <center>
                        <font size="3">PEMERINTAH PROVINSI JAWA TIMUR <br> DINAS PENDIDIKAN </font><br>
                        <font size="4">SMK NEGERI 1 SEPULU BANGKALAN</font><br>
                        <font size="2">NSS/NPSN : 321052905001 / 20555110</font><br>
                        <font size="2">Jl. Raya Sepulu No. 89-A Kec.Sepulu Kab.Bangkalan</font><br>
                        <font size="2">E-mail:smkn1.sepulu@yahoo.com - website : www.smkn1sepulu.sch.id</font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
        </table>
        <table  width="510">
            <tr>
                <td class="text">Bangkalan, 11 Juni 2023</td>
            </tr>
        </table>
        <br>
        <table >
            <tr>
                <td>Nomer</td>
                <td width="480">: -</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td width="480">: -</td>
            </tr>
        </table>
        <br>
        <table  width="510">
            <tr>
                <td>
                    <font size="2">Kepada <br>Yth. <br>PT. Telkom Indonesia Bangkalan <br>Jl. Trunojoyo, Pejagan, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69119, Indonesia <br>Di tempat</font>
                </td>
            </tr>
        </table>
        <br>
        <table  width="510">
            <tr>
                <td>
                    <font size="2">Assalmu'alaikum wr. wb.</font>
                    <font size="2">Sehubungan dengan adanya Program Magang untuk Pengembangan Kompetensi Diri Siswa, berdasarkan Surat Perjanjian Kerjasama Pejabat Pembuat
                        Komitmen Sub Direktorat Penyelarasan Kejuruan dan Kerjasama Industri, Direktorat Pembinaan Sekolah Menengah Kejuruan dan Kepala SMK Negeri 1 Sepulu Nomor: 10141/DS.3/KU/2019,
                        maka kami mengajukan siswa kami untuk mengikuti Magang Industri, siswa tersebut adalah</font>
                </td>
            </tr>
        </table>
        <br>
        <div class="row">
            <table border="1" width="510">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Siswa</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Kelompok</th>
                </tr>
              </thead>
              @php
                  $no=1;
              @endphp
              <tbody>
                @foreach($data as $index => $row)
                <tr>
                  <th>{{$row->no++}}</th>
                  <td>{{$row->user->name}}</td>
                  <td>{{$row->kelas}}</td>
                  <td>{{$row->jurusan}}</td>
                  <td>{{$row->kelompok}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <br>
        <table  width="510">
            <tr>
                <td>
                    <font size="2">Demikian surat permohonan magang ini kami buat, terima kasih atas perhatian dan kesediaan Bapak/Ibu mengabulkan permohonan kami. Terimakasih <br>Wassalamu'alaikum wr. wb.</font>
                </td>
            </tr>
        </table>
        <br>
        <table  width="490">
            <tr>
                <td width="430"></td>
                <td class="text2" align="center">Kepala Sekolah <br><br><br><br><br><br>........................... <br>NIP..................</td>
            </tr>
        </table>
    </center>
</body>
</html>
