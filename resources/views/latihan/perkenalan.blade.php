@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Perkenalan
                </div>
                <div class="card-body">
                    <p> Nama : {{$data['Nama']}}</p>
                    <p>Agama : {{$data['Agama']}}</p>
                    <p>Alamat : {{$data['Alamat']}}</p>
                    <p>hobi</p>
                    <ol>
                        @foreach ($data['hobi'] as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
