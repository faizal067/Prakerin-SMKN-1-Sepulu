@extends('layouts.home')

@section('content')
  <h1 class="text-center mb-4">Edit Daftar Pendaftaran Siswa</h1>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <form action="/updatedaftar/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" name="tglkegiatan" id="exampleInputEmail1"
              value="{{$data->nama}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputKelas" class="form-label">Kelas</label>
              <select class="form-select" name="kelas" aria-label="Default select example" value="{{$data->kelas}}">
                <option selected>pilih sesuai dengan kelas kalian</option>
                <option value="1">Kelas 10</option>
                <option value="2">Kelas 11</option>
                <option value="3">Kelas 12</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputJurusan" class="form-label">Jurusan</label>
              <select class="form-select" name="jurusan" aria-label="Default select example" value="{{$data->jurusan}}">
                <option selected>pilih sesuai dengan jurusan kalian</option>
                <option value="1">RPL</option>
                <option value="2">TKJ</option>
                <option value="3">Multimedia</option>
                <option value="4">APH</option>
                <option value="5">TKR</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputAlamat" class="form-label">Alamat Rumah</label>
              <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->alamat}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputJenisKelamin" class="form-label">Jenis Kelamin</label>
              <select class="form-select" name="jeniskelamin" aria-label="Default select example" value="{{$data->jeniskelamin}}">
                <option selected>pilih sesuai dengan jenis kelamin kalian</option>
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputAgama" class="form-label">Agama</label>
              <select class="form-select" name="agama" aria-label="Default select example" value="{{$data->agama}}">
                <option selected>pilih sesuai dengan agama kalian</option>
                <option value="1">Islam</option>
                <option value="2">Kristen</option>
                <option value="3">Katolik</option>
                <option value="4">Budha</option>
                <option value="5">Hindu</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputKelompok" class="form-label">Kelompok Prakerin</label>
              <select class="form-select" name="kelompok" aria-label="Default select example" value="{{$data->kelompok}}">
                <option selected>pilih sesuai dengan kelompok kalian</option>
                <option value="1">Kelompok 1</option>
                <option value="2">Kelompok 2</option>
                <option value="3">Kelompok 3</option>
                <option value="4">Kelompok 4</option>
                <option value="5">Kelompok 5</option>
                <option value="6">Kelompok 6</option>
                <option value="7">Kelompok 7</option>
                <option value="8">Kelompok 8</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputIndustri" class="form-label">Industri</label>
              <select class="form-select" name="industri" aria-label="Default select example" value="{{$data->industri}}">
                <option selected>pilih sesuai dengan Industri kalian</option>
                <option value="1">Telkom Surabaya</option>
                <option value="2">Ukir Pecah</option>
                <option value="3">PT Tati</option>
                <option value="4">Telkom Bangkalan</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputTelepon" class="form-label">No.Telepon</label>
              <input type="text" name="notelp" class="form-control" id="exampleInputPassword1" value="{{$data->notelp}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputFoto" class="form-label">Masukkan Foto</label>
              <input type="file" name="foto" class="form-control" value="{{$data->foto}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputKeahlian" class="form-label">Keahlian</label>
                <input type="text" name="keahlian" class="form-control" id="exampleInputPassword1" value="{{$data->keahlian}}">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  <div class="container">

  </div>
@endsection
