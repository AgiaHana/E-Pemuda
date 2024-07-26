@extends('layout.sidebar')

@section('konten')
<div class="container">
    <h3>Tambah Data Anggota</h3>
    <form action="{{route('data.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan nama lengkap" name="nama_lengkap">
        </div>
        <div class="mb-3">
            <label for="noHandphone" class="form-label">No Handphone</label>
            <input type="text" class="form-control" id="noHandphone" placeholder="Masukkan no handphone" name="no_hp">
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">jabatan</label>
            <input type="text" class="form-control" id="jabatam" placeholder="Masukkan no handphone" name="jabatan">
        </div>
        <div class="mb-3">
            <label for="masaJabatan" class="form-label">Masa Jabatan</label>
            <input type="text" class="form-control" id="masaJabatan" placeholder="Masukkan tahun jabatan" name="masa_jabatan">
        </div>
        <div class="mb-3">
            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
            <input class="form-control" type="date" placeholder="Masukkan Judul Kegiatan" aria-label="default input example" style="border-radius: 15px" name="tanggal_lahir">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{route('data.index')}}">
            <button type="button" class="btn btn-secondary">Batal</button>
        </a>
    </form>
</div>
@endsection
