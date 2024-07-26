@extends('layout.sidebar')

@section('konten')   

<div class="page-content">
    
    <div class="container">
      <h3>Notulensi</h3>

      @if ($message = session('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif

      <div class="d-flex justify-content-between mb-3">
        <div class="input-group" style="width: 300px;">
            <form action="{{ route('notulen.index') }}" method="GET" class="input-group" style="width: 300px;">
              <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="button">Search</button>
            </form>
        </div>
        <a href="{{route('notulen.create')}}">
        <button class="btn btn-warning">
            + Tambah Notulensi
        </button>
        </a>
      </div>
    </div>

<section class="row">
<div>
  
    <div class="row">
        @php
                    $notulen = App\Models\Notulen::all();
                @endphp
        @foreach ($notulen as $key => $item)

        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{route('notulen.view', $item->id)}}">{{ $item->judul }}</a></h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{ $item->tanggal }}</h6>
                  <p class="card-text">{{ \Illuminate\Support\Str::limit($item->keterangan, 100) }}</p>

                  <div class="text-center" style="margin-top: 2rem; display:flex; justify-content:center; align-items:center;">
                    <a href="{{ route('notulen.sendViaWhatsapp', $item->id) }}" class="btn-warning" style="margin-right: 4px;">
                      <i class="fa-solid fa-share"></i>
                    </a>
                      <a href="{{ route('notulen.downloadPdf', $item->id) }}" class="btn-warning" style="margin-right: 4px;">
                        <i class="fas fa-solid fa-print custom-icon"></i>
                      </a>
                      <a href="{{ route('notulen.edit', $item->id) }}" class="btn-warning" style="margin-right: 4px;">
                      <i class="fas fa-solid fa-pencil custom-icon"></i>
                      </a>
                      <form action="{{ route('notulen.destroy', $item->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn-warning" type="submit">
                      <i class="fas fa-solid fa-trash custom-icon"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@endsection