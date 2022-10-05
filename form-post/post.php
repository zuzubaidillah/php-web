<?php
// echo "<pre>";
// var_dump($_POST);
// die();
// if (count($_POST) == 0) {
//     // dijalankan
//     // harus kembali lagi ke isi form
//     header('Location: form-post.php');
//     exit();
// }
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // dijalankan
    // harus kembali lagi ke isi form
    header('Location: form-post.php');
    exit();
}
?>

<html>

<body>
    <table>
        <tr>
            <td>First Name</td>
            <td><?= $_POST['first_name'] ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?= $_POST['last_name'] ?></td>
        </tr>
    </table>
</body>

</html>