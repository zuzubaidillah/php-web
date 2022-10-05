<?php
// echo "<pre>";
// var_dump($_POST);
// die();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaSekolah = strtoupper($_POST['txt_nama']);
    $telpon = $_POST['txt_telpon'];
    $almat = $_POST['txt_alamat'];
    $aktif = isset($_POST['txt_status']) ? "Aktif" : "Tidak Aktif";
    $adaSiswa = strtoupper($_POST['txt_punya_siswa']);
} else {

    $namaSekolah = "menunggu...";
    $adaSiswa = "menunggu...";
    $almat = "menunggu...";
    $aktif = "menunggu...";
    $telpon = "menunggu...";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Latihan 1 - hasil detail sekolah</title>
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
                        Detail
                    </div>
                    <div class="card-body">

                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $namaSekolah; ?></h5>
                                <p class="card-text">
                                    <?= $almat; ?>
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    Telpon: <?= $telpon; ?>
                                </li>
                                <li class="list-group-item">
                                    Sekolah aktif: <?= $aktif; ?>
                                </li>
                                <li class="list-group-item">
                                    Ada Siswanya: <?= $adaSiswa; ?>
                                </li>
                            </ul>
                            <div class="card-body">
                                <a href="data.php" class="card-link">Tambah Data</a>
                            </div>
                        </div>

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