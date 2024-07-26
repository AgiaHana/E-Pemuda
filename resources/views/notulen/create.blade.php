@extends('layout.sidebar')

@section('konten')   
<div class="page-heading">
    <h3>Tambah Notulensi</h3>
</div>

<form action="{{ route('notulen.store') }}" method="POST">
@csrf
<div class="page-content">
    <div class="container-edit">
        <label for="judul"><b>Judul Kegiatan</b></label>
        <input class="form-control" type="text" name="judul" placeholder="Masukkan Judul Kegiatan" aria-label="default input example" style="border-radius: 15px" id="judul">

        <label for="tanggal"><b>Tanggal</b></label>
        <input class="form-control" type="date" placeholder="Masukkan Judul Kegiatan" aria-label="default input example" style="border-radius: 15px" name="tanggal" id="tanggal">

        <div class="mb-3">
            <label for="formFile" class="form-label"><b>Tanda Tangan</b></label>
            <input class="form-control" type="file" id="formFile" name="ttd">
          </div>

        <label for="keterangan"><b>Isi Notulensi</b></label>
        <textarea class="form-control" type="text" placeholder="Masukkan Judul Kegiatan" aria-label="default input example" style="border-radius: 15px" rows="15" name="keterangan" id="keterangan"></textarea>

        <div class="text-center" style="margin-top: 2rem">
            <button class="btn-warning" type="submit">Simpan</button>

            <button class="btn-warning">
                <a style="text-decoration:none; color:black" href="{{ route('notulen.index') }}">Batal</a>
            </button>
        </div>
    </div>
</div>
</form>

@endsection