@extends('layout.layout')

@section('content')
<div class="album py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($artikel as $item)
            <div class="col">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 100%;">
                    <img src="{{ $item->foto }}" class="card-img-top" alt="{{ $item->judul }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">
                            <a href="{{ url('artikel/'.$item->id) }}" class="btn btn-sm btn-outline-info">Lihat</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
