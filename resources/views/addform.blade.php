@extends('layouts.app')

@section('content')
    <div class="position-relative p-5" style="height: 614px">
        <div class="bg-white p-5 position-absolute top-50 start-50 translate-middle">
            <form action="/addMahasiswa" >
                <table style="width: 800px;">
                    <tr>
                        <td>id</td>
                        <td><input class="form-control my-3" type="text" placeholder="id mahasiswa" name="id"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input class="form-control my-3" type="text" placeholder="nama" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Perguruan Tinggi</td>
                        <td><input class="form-control my-3" type="text" placeholder="perguruan tinggi" name="perguruan_tinggi"></td>
                    </tr>
                    <tr>
                        <td>Mentor</td>
                        <td><input class="form-control my-3" type="text" placeholder="mentor" name="mentor"></td>
                    </tr>
                </table>
                <button class="btn btn-success my-3" style="width: 100%;"  type="submit">Tambahkan</button>
            </form>
        </div>
    </div>    
@endsection 