<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GITS-MSIB4-TUGAS4</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">
        <div id="app">
            <!-- navbar -->
            <nav class="navbar bg-white">
                <div class="container-fluid ps-5 navbar-expand">
                    <img src="asset/logo-gits.png" style="height: 75px;">
                    <a class="navbar-brand" href="#">Full Stack Web Developer by PT GITs Indonesia</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="container-fluid ps-5 navbar-expand">              
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/addForm">Tambah peserta</a>
                            </li>
                        </ul>
                        <form class="d-flex" action="/" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" name="keyword">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <main class="body">
                @yield('content')
            </main>
        </div>
    </body>
</html>
