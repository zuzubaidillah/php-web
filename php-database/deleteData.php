<?php
require_once "koneksi.php";

$sql = "DELETE FROM sekolah WHERE id='44'";
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