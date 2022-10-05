<?php
require_once __DIR__ . "/model-data.php";
?>
<html>

<body>
    <h1>DETAIL Data Sekolah</h1>
    <a href="/get/contoh-kasus/list.php">lihat data</a>
    <br>
    <br>
    <table border="1">
        <thead>
        <tbody>
            <?php
            foreach ($dataSekolah as $value) {
                if ($value['id'] == $_GET['id']) { ?>
            <tr>
                <th align="left">
                    Nama Sekolah
                </th>
                <td>
                    <?= $value['nama']; ?> <br>
                    id: <?= $value['id']; ?>
                </td>
            </tr>
            <tr>
                <th align="left">
                    Alamat
                </th>
                <td>
                    Alamat: <?= $value['alamat']; ?>
                </td>
            </tr>
            <tr>
                <th align="left">
                    Telpon
                </th>
                <td>
                    Telpon: <?= $value['telpon']; ?>
                </td>
            </tr>
            <?php }
            }
            ?>
        </tbody>
    </table>
</body>

</html>