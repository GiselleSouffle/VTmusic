@extends('layout.admi')
@section('title', 'VTmusic - Admin')

@section('content')

<div class="container-fluid px-4">
                <h2 class="mt-4">Vote</h2>
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
                                    <th>Usuario</th>
                                    <th>Fecha</th>
                                    <th>Cancion</th>
                                    <th>Genero</th>
                                    <th>Artista</th>
                                    <th>Album</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($votes as $vote)
                                    <tr>
                                        <td>{{ $vote->id }}</td>
                                        <td>{{ $vote->user }}</td>
                                        <td>{{ $vote->date }}</td>
                                        <td>{{ $vote->song_id }}</td>
                                        <td>{{ $vote->gender_id }}</td>
                                        <td>{{ $vote->artist_id }}</td>
                                        <td>{{ $vote->album_id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection