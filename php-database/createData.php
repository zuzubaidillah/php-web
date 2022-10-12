<?php
require_once "koneksi.php";

$sql = "INSERT INTO siswa (id, id_sekolah, nama, nis, tgl_lahir, is_delete) 
VALUES ('1', '1', 'zuz', '001', '2002-10-08', '0');";

mysqli_query($conn, $sql);
$hasil = mysqli_affected_rows($conn);
if ($hasil == 1) {
    echo "berhasil disimpan";
} else {
    echo "gagal disimpan. " . mysqli_error($conn);
}

// echo "<pre>";
// var_dump($result);
// die();








// create lebih dari satu

// $sql = "INSERT INTO siswa (id, id_sekolah, nama, nis, tgl_lahir, is_delete) 
// VALUES ('" . mt_rand(0, 99) . "', '1', 'zuz', '001', '2002-10-08', '0');";

// $sql .= "INSERT INTO siswa (id, id_sekolah, nama, nis, tgl_lahir, is_delete) 
// VALUES ('" . mt_rand(0, 99) . "', '1', 'zuz', '001', '2002-10-08', '0');";
// mysqli_multi_query($conn, $sql);
// $result = mysqli_affected_rows($conn);
// if ($result) {
//     $result = true;
// } else {
//     $result = false;
// }

// echo "<pre>";
// var_dump($result);
// die();