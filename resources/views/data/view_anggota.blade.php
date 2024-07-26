@extends('layout.sidebar')

@section('konten')
<div class="container">
    <h3>View Data Anggota</h3>
    <button class="btn-warning" style="margin-top: 8px; margin-bottom: 8px">
        <a style="text-decoration:none; color:white; margin-booton: 2rem;" href="{{ route('data.index') }}">
            <i class="fa fa-solid fa-arrow-left" style="margin-right: 8px;"></i>Kembali
        </a>
    </button>
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <p><b>Nama Lengkap</b>: {{ $anggota->nama_lengkap}}</p>
            </div>
            <div class="mb-3">
                <p><b>No Handphone</b>: {{ $anggota->no_hp}}</p>
            </div>
            <div class="mb-3">
                <p><b>Jabatan</b>: {{ $anggota->jabatan}}</p>
            </div>
            <div class="mb-3">
                <p><b>Masa Jabatan</b>: {{ $anggota->masa_jabatan}}</p>
            </div>
            <div class="mb-3">
                <p><b>Tanggal Lahir</b>: {{ $anggota->tanggal_lahir}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
