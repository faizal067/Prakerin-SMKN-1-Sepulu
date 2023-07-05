<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Logbook Kegiatan Siswa</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama Siswa</th>
    <th>Tanggal Kegiatan</th>
    <th>Kegiatan</th>
    <th>Rincian Kegiatan</th>
    <th>Status</th>
    {{-- <th>Foto Kegiatan</th> --}}
  </tr>
  @php
  $no=1;
  @endphp
  @foreach ($data as $row)
  <tr>
    <td>{{$no++}}</td>
    <td>{{$row->user->name}}</td>
    <td>{{$row->tglkegiatan}}</td>
    <td>{{$row->kegiatan}}</td>
    <td>{{$row->rincian}}</td>
    <td>
        <label class="label {{($row->is_accepted == 1) ? 'label-success' : 'label-danger'}}">
          {{($row->is_accepted == 1) ? 'Disetujui' : 'Tidak disetujui' }}</label>
    </td>
    {{-- <td>
        <img src="{{asset('fotokegiatan/'.$row->foto)}}" alt="" style="width: 48px">
    </td> --}}
  </tr>
  @endforeach
</table>

</body>
</html>


