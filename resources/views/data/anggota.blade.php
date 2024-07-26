@extends('layout.sidebar')

@section('konten')
    <div class="container">
        <h3>Data Anggota</h3>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="d-flex justify-content-between mb-3">
            <div class="input-group" style="width: 300px;">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn btn-outline-secondary" type="button">Search</button>
            </div>
            <a href="{{route('data.create')}}">
            <button class="btn btn-warning">
                + Tambah Data Anggota
            </button>
            </a>
        </div>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Nama Lengkap</th>
                    <th>No Hp</th>
                    <th>Jabatan</th>
                    <th>Masa Jabatan</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $key => $item)
                    <tr>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->masa_jabatan }}</td>
                        <td>
                            <form action="{{ route('data.destroy', $item->id) }}" method="post">
                            <a href="{{route('data.edit', $item->id)}}">
                                <button class="btn btn-warning btn-sm" type="button"><i class="bi bi-pencil"></i></button>
                            </a>
                            
                            <button type="button" class="btn btn-info btn-sm">
                                <a href="{{route('data.show', $item->id)}}">
                                    <i class="bi bi-eye"></i></a>
                            </button>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection