@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">User</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data User</li>
            </ol>
            <a href="/user/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>contact</th>
                                <th>password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userData as $User)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$User->name}}</td>
                                    <td>{{$User->email}}</td>
                                    <td>{{$User->contact}}</td>
                                    <td>{{$User->password}}</td>

                                    <td>
                                        <a href="/user/edit/{{$User->id}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/user/delete/{{$User->id}}" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
