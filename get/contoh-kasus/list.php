<?php
require_once "model-data.php";
?>
<html>

<body>
    <h1>List Data Sekolah</h1>
    <table style="width: 100%;" border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Data</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($dataSekolah as $value) {
            ?>
            <tr>
                <td>
                    <?= ++$no; ?>
                </td>
                <td>
                    <?= $value['nama']; ?> <br> id: <?= $value['id']; ?>
                </td>
                <td>
                    Alamat: <?= $value['alamat']; ?> <br>
                    Telpon: <?= $value['telpon']; ?>
                </td>
                <td>
                    <a href="/get/contoh-kasus/detail.php?id=<?= $value['id']; ?>">EDIT</a>
                    <a href="/get/contoh-kasus/hapus.php?id=<?= $value['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>