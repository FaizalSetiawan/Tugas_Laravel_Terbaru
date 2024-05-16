@extends('layout.layout')

@section('content')
<div class="container">
    <center>
        <h1>KATEGORI</h1>
    </center>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($artikel as $item)
        <div class="col">
            <div class="card shadow mb-5 bg-body rounded">
                <img src="{{ $item->foto }}" class="card-img-top" alt="..." style="height: 230px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text">{{ $item->kategori }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ url('artikel/'. $item->id) }}" class="btn btn-sm btn-outline-info">Baca Artikel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <a href="{{ url('/artikel') }}" class="btn btn-outline-info mt-5">Kembali ke Halaman Artikel</a>
</div>
@endsection
