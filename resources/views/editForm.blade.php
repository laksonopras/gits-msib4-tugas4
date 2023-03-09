<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GITS-MSIB4-TUGAS4</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">
        <!-- navbar -->
        <nav class="navbar bg-white">
            <div class="container-fluid ps-5 navbar-expand">
                <img src="{{ asset('/asset/logo-gits.png') }}" style="height: 75px;">
                <a class="navbar-brand" href="/getMahasiswa">Full Stack Web Developer by PT GITs Indonesia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- content -->
        <div class="position-relative p-5" style="height: 614px">
            <div class="bg-white p-5 position-absolute top-50 start-50 translate-middle">
                <form action="/updateMahasiswa/{{ $mahasiswa['id'] }}" >
                    <table style="width: 800px;">
                        <tr>
                            <td>id</td>
                            <td><input class="form-control my-3" type="text" value="{{ $mahasiswa['id'] }}" disabled ></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input class="form-control my-3" type="text" value="{{ $mahasiswa['nama'] }}" disabled ></td>
                        </tr>
                        <tr>
                            <td>Perguruan Tinggi</td>
                            <td><input class="form-control my-3" type="text" value="{{ $mahasiswa['perguruan_tinggi'] }}" name="perguruan_tinggi"></td>
                        </tr>
                        <tr>
                            <td>Mentor</td>
                            <td><input class="form-control my-3" type="text" value="{{ $mahasiswa['mentor'] }}" name="mentor"></td>
                        </tr>
                    </table>
                    <button class="btn btn-success my-3" style="width: 100%;"  type="submit">Perbarui</button>
                </form>
            </div>
        </div>
    </body>
</html>
