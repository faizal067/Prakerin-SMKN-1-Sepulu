@extends('layouts.home')

@section('content')
<h1 class="text-center mb-4">Tambah Logbook Siswa</h1>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <form action="/insertlogbook" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">User ID</label>
              <input type="text" class="form-control" name="user_id" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth()->user()->id}}">
            </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Kegiatan</label>
              <input type="date" class="form-control" name="tglkegiatan" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Kegiatan</label>
              <input type="text" name="kegiatan" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Rincian Kegiatan</label>
              <input type="text" name="rincian" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
              <input type="file" name="foto" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
@endsection