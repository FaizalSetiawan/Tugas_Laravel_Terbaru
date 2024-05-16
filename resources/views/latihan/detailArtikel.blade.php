@extends('layout.layout')

@section('content')
<div class="album py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <img src="{{ $artikel->foto }}" class="card-img-top" alt="{{ $artikel->judul }}">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $artikel->judul }}</b></h5>
                        <p class="card-text">Kategori : <a href="{{ url('artikel/kategori/'. $artikel->kategori) }}">{{ $artikel->kategori }}</a></p>
                        <p class="card-text">{{ $artikel->konten }}</p>
                        <p class="card-text">Penulis : {{ $artikel->penulis }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
