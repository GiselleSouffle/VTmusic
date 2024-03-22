@extends('layout.admi')
@section('title', 'VTmusic - Admin')

@section('content')

<div class="container-fluid px-4">
                <h2 class="mt-4">Comments</h2>
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
                                    <th>Mensaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->id }}</td>
                                        <td>{{ $comment->message }}</td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection