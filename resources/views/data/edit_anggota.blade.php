@extends('layout.sidebar')

@section('konten')
<div class="container">
    <h3>Edit Data Anggota</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('data.update', $anggota->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan nama lengkap" name="nama_lengkap" value="{{ $anggota->nama_lengkap }}" required>
        </div>
        <div class="mb-3">
            <label for="noHandphone" class="form-label">No Handphone</label>
            <input type="text" class="form-control" id="noHandphone" placeholder="Masukkan no handphone" name="no_hp" value="{{ $anggota->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">jabatan</label>
            <input type="text" class="form-control" id="jabatam" placeholder="Masukkan no handphone" name="jabatan" value="{{ $anggota->jabatan }}" required>
        </div>
        <div class="mb-3">
            <label for="masaJabatan" class="form-label">Masa Jabatan</label>
            <input type="text" class="form-control" id="masaJabatan" placeholder="Masukkan tahun jabatan" name="masa_jabatan" value="{{ $anggota->masa_jabatan }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
            <input class="form-control" type="date" placeholder="Masukkan Judul Kegiatan" aria-label="default input example" style="border-radius: 15px" name="tanggal_lahir" value="{{ $anggota->tanggal_lahir }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{route('data.index')}}">
            <button type="button" class="btn btn-secondary">Batal</button>
        </a>
    </form>
</div>
@endsection
