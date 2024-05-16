@php
// Menampilkan Semua Data Album
// $albums = \App\Models\AlbumMusik::all();
// Menampilkan salah satu Album
// $albums = \App\Models\AlbumMusik::where('tahun', '>=', '2024')
//                                     ->orderBy('tahun', 'asc')
//                                     ->get();
// Menampilkan menggunakan find
// $albums = \App\Models\AlbumMusik::where('id', '>=',)
//                                     ->orderBy('id', 'asc')
//                                     ->get();
// Menampilkan menggunakan find
$album = \App\Models\AlbumMusik::where('id', '>=', 1)
                                    ->orderBy('id', 'asc')
                                    ->first();
@endphp

@if ($album)
    <h1>ID : {{ $album->id }}</h1>
    <h1>Judul: {{ $album->judul }}</h1>
    <h1>Tahun: {{ $album->tahun }}</h1>
    <h1>CoverMusik: {{ $album->cover_album }}</h1>
    <hr>
@else
    <p>Album tidak ditemukan.</p>
@endif


{{-- @foreach ($albums as $album)
    <h1>ID : {{ $album->id }}</h1>
    <h1>Judul: {{ $album->Judul }}</h1>
    <h1>Tahun: {{ $album->tahun }}</h1>
    <h1>CoverMusik: {{ $album->cover_album }}</h1>
    <hr>
@endforeach --}}

