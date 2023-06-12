@extends('layouts.app')

@section('content')
@include('partials.alerts')
<div class="container">
  <div class="row">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Industri</th>
          <th scope="col">Lokasi</th>
          <th scope="col">Kebutuhan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $row)
          <tr>
            <td>{{ $row->no++;}}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->lokasi }}</td>
            <td>{{ $row->kebutuhan }}</td>
            <td>
              <a href="/tampilkan">Lihat</a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    {{ $data->links() }} 
  </div>
</div>
@endsection
