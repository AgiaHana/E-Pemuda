@extends('layout.sidebar')

@section('konten')   
<div class="page-heading">
    <h3>Edit Notulensi</h3>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<div class="page-content">
    <div class="container-edit">
        <form action="{{ route('notulen.update', $notulen->id) }}" method="post">
        @csrf
        @method('put')
        <label for="judul"><b>Judul Kegiatan</b></label>
        <input class="form-control" type="text" placeholder="Masukkan Judul Kegiatan" aria-label="default input example" style="border-radius: 15px" name="judul" value="{{ old('judul', $notulen->judul) }}">

        <label for="tanggal"><b>Tanggal</b></label>
        <input class="form-control" type="date" placeholder="Masukkan Judul Kegiatan" aria-label="default input example" style="border-radius: 15px" name="tanggal" value="{{ old('tanggal', $notulen->tanggal) }}">

        <div class="mb-3">
            <label for="ttd" class="form-label"><b>Tanda Tangan</b></label>
            <input class="form-control" type="file" id="formFile" name="ttd" value="{{ old('ttd', $notulen->ttd) }}">
          </div>

        <label for="keterangan"><b>Isi Notulensi</b></label>
        <input class="form-control" type="text" placeholder="Masukkan Keterangan Kegiatan" aria-label="default input example" style="border-radius: 15px;" name="keterangan" value="{{ old('keterangan', $notulen->keterangan) }}"></input>

        <div class="text-center" style="margin-top: 2rem">
            <button class="btn-warning" type="submit">Simpan</button>

            <button class="btn-warning">
                <a style="text-decoration:none; color:black" href="{{ route('notulen.index') }}">Batal</a>
            </button>
        </div>
    </form>
    </div>
</div>

@endsection