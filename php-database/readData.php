<?php
require_once "koneksi.php";

$sql = "SELECT * FROM siswa ORDER BY nama ASC";
$query = mysqli_query($conn, $sql);
$dtSekolah = mysqli_fetch_all($query, MYSQLI_ASSOC);
// $jmlData = mysqli_num_rows($query);
$jmlData = sizeof($dtSekolah); // count($dtSekolah)

if ($jmlData >= 1) {
    foreach ($dtSekolah as $value) {
        $nam = $value['nama'];
        $id = $value['id'];

        echo $nam;
        echo "<br><br><br>";
    }
} else {
    echo "Data Masih Kosong";
}

// echo "<pre>";
// var_dump($dtSekolah);
// die();

// $dtSekolah = mysqli_fetch_array($query);
// $dtSekolah = mysqli_fetch_all($query);
// $dtSekolah = mysqli_num_rows($query);