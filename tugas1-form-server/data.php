<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Latihan 1 - formulir sekolah</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Latihan Formulir</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">

        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Form Sekolah
                    </div>
                    <div class="card-body">
                        <form action="server_simpan_data_sekolah.php" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama sekolah</label>
                                <input type="text" class="form-control" id="nama" name="txt_nama">
                                <div class="form-text">Pastikan huruf Capital(besar)</div>
                            </div>
                            <div class="mb-3">
                                <label for="telpon" class="form-label">Telpon sekolah</label>
                                <input type="text" class="form-control" id="telpon" name="txt_telpon">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" name="txt_alamat"></textarea>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="txt_status" name="txt_status">
                                <label class="form-check-label" for="txt_status">Sekolah Aktif?</label>
                            </div>
                            <label for="">Ada siswa</label>
                            <div class="form-check">
                                <input value="tidak ada" class="form-check-input" type="radio" name="txt_punya_siswa"
                                    id="txt_tidak_ada">
                                <label class="form-check-label" for="txt_tidak_ada">
                                    Tidak ada
                                </label>
                            </div>
                            <div class="form-check">
                                <input value="ada" class="form-check-input" type="radio" name="txt_punya_siswa"
                                    id="txt_ada" checked>
                                <label class="form-check-label" for="txt_ada">
                                    Ada
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>