@extends('layouts.app')

@section('content')
@include('partials.alerts')
<div class="container">
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Bantuan
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="/logbooks/exportpdflogbook">Export PDF</a></li>
    </ul>
  </div>
  <div class="row g-3 align-items-center mt-1">
          <div class="col-auto">
              <form action="/logbooks" method="GET">
              <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
              </form>
          </div>
  <div class="row">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tanggal Kegiatan</th>
          <th scope="col">Nama Siswa</th>
          <th scope="col">Kegiatan</th>
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
          <td>{{$row->user->name}}</td>
          <td>{{$row->kegiatan}}</td>
          <td>
            <label class="label {{($row->is_accepted == 1) ? 'label-success' : 'label-danger'}}">
              {{($row->is_accepted == 1) ? 'Disetujui' : 'Tidak disetujui' }}</label>
          </td>
          @if ($row->is_accepted)
                    <td>
                        <span class="badge text-bg-success border-0">Sudah Disetujui</span>
                        <form action="{{ route('logbooks.notacceptLogbook', $row->id) }}" method="post">
                          @csrf
                          <input type="hidden" name="user_id" value="{{ $row->id }}">
                          <button class="badge text-bg-danger border-0" type="submit">Tidak Disetujui</button>
                      </form>
                      <form action="{{ route('logbooks.tampil', $row->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $row->id }}">
                        <button class="badge text-bg-info border-0" type="submit">Lihat detail</button>
                    </form>
                    </td>
                    @else
                    <td>
                        <form action="{{ route('logbooks.acceptLogbook', $row->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $row->id }}">
                            <button class="badge text-bg-primary border-0" type="submit">Disetujui</button>
                        </form>
                        <span class="badge text-bg-danger border-0">Tidak Disetujui</span>
                        <form action="{{ route('logbooks.tampil', $row->id) }}" method="post">
                          @csrf
                          <input type="hidden" name="user_id" value="{{ $row->id }}">
                          <button class="badge text-bg-info border-0" type="submit">Lihat detail</button>
                      </form>
                    </td>
                    @endif
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $data->links() }}
  </div>
</div>
@endsection
