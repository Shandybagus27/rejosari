<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg" arial-label="second navbar example" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="blog">Desa Rejosari</a>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="blog">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="profil">Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tema
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pertanian">Pertanian</a></li>
                            <li><a class="dropdown-item" href="perternakan">Perternakan</a></li>
                            <li><a class="dropdown-item" href="alam">Alam</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="peta">Digital Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pokdarwis">Pokdarwis</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="galeri">Galeri</a></li>
                            <li><a class="dropdown-item" href="informasi">Informasi</a></li>
                            <li><a class="dropdown-item" href="produk">Produk Unggulan</a></li>
                            <li><a class="dropdown-item" href="berita">Berita/Artikel</a></li>
                            <li><a class="dropdown-item" href="paket">Paket Wisata</a></li>
                            <li><a class="dropdown-item" href="kontak">Kontak</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#modal-login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal Login</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-dark text-white">
        <img width="1200" height="450" src="img/sawah.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <div class="position-absolute top-50 start-50 translate-middle" >
                <p class="fs-2">
                    INFORMASI
                </p>
            </div>
            <div class="position-absolute bottom-0 start-0" >
                <p class="fs-1">
                    DESA WISATA REJOSARI
                </p>
            </div>
        </div>
    </div>
</body>

</html>
