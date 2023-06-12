@extends('layouts.landing')
@section('content')
<div class="container">
  <div class="row">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">Nama Industri</th>
          <th scope="col">Kebutuhan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $row)
          <tr>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->kebutuhan }}</td>
            <td>
              <a href="/tampilkan/tam/{{$row->id}}">Lihat</a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    {{ $data->links() }}
  </div>
</div>
@endsection
