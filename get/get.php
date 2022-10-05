<?php
// percabangan
if (isset($_GET['name'])) {
    $namaDariGet = $_GET['name'];
} else {
    $namaDariGet = "name masih kosong";
}
// $namaDariGet = ($_GET['name'] ?? "name masih kosong");
$say = "Hello " . $namaDariGet;
?>
<html>

<body>
    <h1><?= $say ?></h1>
</body>

</html>