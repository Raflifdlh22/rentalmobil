@extends('template.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Mobil</h1>
    <div class="d-flex justify-content-between mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Data Mobil</li>
        </ol>
        <a href="/merk/create" class="btn btn-primary">Tambah Data</a>
    </div>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>nomor</th>
                    <th>nama mobil pelanggan</th>
                    <th>merk mobil</th>
                    <th>cc</th>
                    <th>action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($datamobil as $mobil)
                    <tr>
                        <td>
                            {{ $loop->iteration }}</td>
                        <td>
                            {{ $mobil['namaMobil'] }}
                        </td>
                        <td>
                            {{ $mobil['merkMobil'] }}
                        </td>
                        <td>
                            {{ $mobil['cc'] }}
                        </td>
                        <td>
                            <a href="/mobil/edit/{{$mobil->id}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/mobil/delete/{{$mobil->id}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @endforeach
        </table>
        </div>
    </div>
@endsection