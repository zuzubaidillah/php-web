<?php
require_once "koneksi.php";

$sql = "UPDATE sekolah SET nama='Sekolah Update', telpon='0834523',alamat='Jombang Update',is_delete='4' WHERE id='2'";
mysqli_query($conn, $sql);

$result = mysqli_affected_rows($conn);
if ($result == 1) {
    $result = true;
} else {
    $result = false;
}
// debugging
echo "<pre>";
var_dump($result, mysqli_error($conn));
die();