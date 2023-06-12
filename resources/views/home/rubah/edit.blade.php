@extends('layouts.home')

@section('content')
  <h1 class="text-center mb-4">Edit Logbook Siswa</h1>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <form action="/updatelogbook/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Kegiatan</label>
              <input type="date" class="form-control" name="tglkegiatan" id="exampleInputEmail1"
              value="{{$data->tglkegiatan}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Kegiatan</label>
              <input type="text" name="kegiatan" class="form-control" id="exampleInputPassword1"
              value="{{$data->kegiatan}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Rincian Kegiatan</label>
              <input type="text" name="rincian" class="form-control"
              id="exampleInputPassword1" value="{{$data->rincian}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Foto Kegiatan</label>
              <input type="file" name="foto" class="form-control"
              id="foto" value="{{ $data->foto }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  <div class="container">

  </div>
@endsection
