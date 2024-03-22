@extends('layout.admi')
@section('title', 'VTmusic - Admin')

@section('content')

<div class="container-fluid px-4">
                <h2 class="mt-4">Song</h2>
                <ol class="breadcrumb mb-4">
                    <a class="breadcrumb-item active" href="/admin">Atras</a>
                </ol>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titulo</th>
                                    <th>Artista</th>
                                    <th>Genero</th>
                                    <th>Imagen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($songs as $song)
                                    <tr>
                                        <td>{{ $song->id }}</td>
                                        <td>{{ $song->title }}</td>
                                        <td>{{ $song->artist }}</td>
                                        <td>{{ $song->gener }}</td>
                                        <td>{{ $song->image }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection