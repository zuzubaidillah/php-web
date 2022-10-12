<?php
require_once "koneksi.php";

// code sql Create database
$sql = "CREATE DATABASE pendidikan2";
// QUERY digunakan untuk melakukan aksi ke bagian database mysql
mysqli_query($conn, $sql);
// ECHO menampilkan ke tulisan ketik code diatas tidak terjadi error
echo "Database created successfully";