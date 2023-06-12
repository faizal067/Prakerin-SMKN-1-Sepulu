@extends('layouts.landing')
@section('content')
<div class="container">
    <div class="col-md-15">
      <div class="card shadow-sm mb-1">
        <div class="row">
          <div class="card-body">
            <div class="card-header">
              Data Lokasi Prakerin
            </div>
            @foreach($data as $index => $row)
              <ul>
                  <li>Nama Industri : {{$row->nama}}</li>
                  <li>Jurusan : {{$row->deskripsi}}</li>
                  <li>Alamat : {{$row->kebutuhan}}</li>
                  <li>Lokasi : <br>
                    <iframe src="https://www.google.com/maps/embed?pb={{$row->lokasi}}" width="300" height="200" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
              </ul>
              <div class="modal-footer">
                  <a href="/tampilkan" class="btn btn-primary" role="button">Back</a>
              </div>
          </div>
            {{ $data->links() }}
          </div>
          @endforeach
      </div>
    </div>
</div>
@endsection
