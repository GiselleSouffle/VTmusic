@extends('layout.admi')
@section('title', 'VTmusic - Admin')

@section('content')

<div class="container-fluid px-4">
                <h2 class="mt-4">Users</h2>
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
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Email_verified_at</th>
                                    <th>Contraseña</th>
                                    <th>Status</th>
                                    <th>Nivel</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->surname }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email_verified_at }}</td>
                                        <td>{{ $user->password }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>{{ $user->level_id }}</td>
                                        <td>{{ $user->image }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection