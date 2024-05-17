@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Data Genre
                        <a href="{{ route('genre.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Nama Genre</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                               <tbody>
                                 @php $no = 1; @endphp
                                @foreach ($genres as $genre)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $genre->nama_genre }}</td>
                                        <td>
                                            <form action="{{ route('genre.destroy', $genre->id) }}" id="delete-data"
                                                method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('genre.edit', $genre->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    Edit
                                                </a>
                                                <a href="{{ route('genre.show', $genre->id) }}"
                                                    class="btn btn-sm btn-warning">
                                                    Show
                                                </a>

                                                <button class="btn btn-sm btn-danger" type="submit"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                    Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
