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
                  <li>Nama Siswa : {{$row->user->name}}</li>
                  <li>Tanggal Kegiatan : {{$row->tglkegiatan}}</li>
                  <li>Kegiatan : {{$row->kegiatan}}</li>
                  <li>Rincian Kegiatan : {{$row->rincian}}</li>
                  <li>Foto Kegiatan : <img src="{{asset('fotologbook/'.$row->foto)}}" alt="" style="width: 48px"></li>
                  <li>Status :   <label class="label {{($row->is_accepted == 1) ? 'label-success' : 'label-danger'}}">
                    {{($row->is_accepted == 1) ? 'Disetujui' : 'Tidak disetujui' }}</label></li>
              </ul>
              <div class="modal-footer">
                  <a href="{{route('logbooks.index')}}" class="btn btn-primary" role="button">Back</a>
              </div>
          </div>
            {{ $data->links() }} 
          </div>
          @endforeach
      </div>
    </div>
</div>
@endsection