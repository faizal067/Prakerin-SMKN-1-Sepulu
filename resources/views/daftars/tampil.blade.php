@extends('layouts.app')
@push('style')
@powerGridStyles
@endpush
@section('content')
@include('partials.alerts')
<div class="container">
    <div class="col-md-15">
      <div class="card shadow-sm mb-1">
        <div class="row">
          <div class="card-body">
            <div class="card-header">
              Data Diri Siswa Prakerin
            </div>
            @foreach($data as $index => $row)
              <ul>
                  <li>User ID : {{$row->user->id}}</li>
                  <li>Nama : {{$row->nama}}</li>
                  <li>Kelas : {{$row->kelas}}</li>
                  <li>Jurusan : {{$row->jurusan}}</li>
                  <li>Alamat : {{$row->alamat}}</li>
                  <li>Jenis Kelamin : {{$row->jeniskelamin}}</li>
                  <li>Agama : {{$row->agama}}</li>
                  <li>Kelompok : {{$row->kelompok}}</li>
                  <li>Industri : {{$row->industri}}</li>
                  <li>No. Telepon : {{$row->notelp}}</li>
                  <li>Foto Formal : <img src="{{asset('fotodaftar/'.$row->foto)}}" alt="" style="width: 48px"></li>
                  <li>Keahlian :   {{$row->keahlian}}</li>
                  <li>Status :   <label class="label {{($row->is_accepted == 1) ? 'label-success' : 'label-danger'}}">
                    {{($row->is_accepted == 1) ? 'Disetujui' : 'Tidak disetujui' }}</label></li>
              </ul>
              <div class="modal-footer">
                  <a href="{{route('daftars.index')}}" class="btn btn-primary" role="button">Back</a>
              </div>
          </div>
            {{ $data->links() }} 
          </div>
          @endforeach
      </div>
    </div>
</div>
@endsection