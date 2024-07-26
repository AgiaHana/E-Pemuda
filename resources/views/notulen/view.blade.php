@extends('layout.sidebar')

@section('konten')   
<div class="page-heading">
    <h3>View Notulensi</h3>
</div>

<div class="page-content">
    <div class="text-center" style="margin-top: 2rem; display:flex;">
    <button class="btn-warning">
        <a style="text-decoration:none; color:white; margin-booton: 2rem;" href="{{ route('notulen.index') }}">
            <i class="fa fa-solid fa-arrow-left" style="margin-right: 8px;"></i>Kembali
        </a>
    </button>
    <form action="{{ route('notulen.destroy', $notulen->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn-warning" type="submit" style="color:white; margin-left: 8px;"> Hapus </button>
    </form>
    </div>

    <div class="card" style="margin-top: 24px;">
        <div class="card-body" style="border-color: blue">
            <h4>{{ $notulen->judul}}</h4>
            <h6>{{ $notulen->tanggal}}</h6> <br>
            <p>{!! nl2br(e( $notulen->keterangan)) !!}</p>
        </div>
    </div>
</div>

@endsection