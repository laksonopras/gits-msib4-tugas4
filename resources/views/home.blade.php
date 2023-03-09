@extends('layouts.app')

@section('content')
    <!-- content -->
    <div style="padding: 25px;" >
        <div style="background: white;  padding: 25px;">
            <p class="text-center">Daftar Peserta Program</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Perguruan Tinggi </th>
                        <th scope="col">Mentor </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa['id'] }}</td>
                        <td>{{ $mahasiswa['nama'] }}</td>
                        <td>{{ $mahasiswa['perguruan_tinggi'] }}</td>
                        <td>{{ $mahasiswa['mentor'] }}</td>
                        <td><a class="btn btn-outline-secondary" href="/editForm/{{$mahasiswa}}">ubah</a></td>
                        <td><a class="btn btn-danger" href="/deleteMahasiswa/{{$mahasiswa['id']}}" >hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
