@extends('layouts.home')

@section('content')
<div class="container">
    <a href="/home/rubah/create" class="btn btn-success margin-buttom="50px>Tambah ></a>
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Bantuan
          </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <li><a class="dropdown-item" href="/exportpdflogbook">Export PDF</a></li>
          </ul>
        </div>
        <div class="row g-3 align-items-center mt-1">
                <div class="col-auto">
                    <form action="/logbook" method="GET">
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                    </form>
                </div>

    <div class="row">
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal Kegiatan</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Ditambahkan pada</th>
            <th scope="col">Foto Kegiatan</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
            $no = 1;
          @endphp
          @foreach($data as $index => $row)
          <tr>
            <th scope="row">{{ $index + $data->firstItem()}}</th>
            <td>{{$row->tglkegiatan}}</td></td>
            <td>{{$row->kegiatan}}</td>
            <td>{{$row->created_at->format('D M Y')}}</td>
            <td>
              <img src="{{asset('fotokegiatan/'.$row->foto)}}" alt="" style="width: 48px">
            </td>
            <td>
              <label class="label {{($row->is_accepted == 1) ? 'label-success' : 'label-danger'}}">
                {{($row->is_accepted == 1) ? 'Disetujui' : 'Tidak disetujui' }}</label>
            </td>
            <td>
              <a href="/deletelogbook/{{$row->id}}" class="btn btn-danger">Hapus</a>
              <a href="/home/rubah/edit/{{ $row->id }}" class="btn btn-warning">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $data->links() }}
    </div>
  </div>
@endsection
