<?php
$browser = $_SERVER['HTTP_SEC_CH_UA'];
$removePetik = str_replace('"', "", $browser);
$arrayBrowser = explode(";", $removePetik);
$versiBrowser = str_replace("=", '.', $arrayBrowser[4]);
$hasilBroser = $arrayBrowser[0] . " " . $versiBrowser;
// echo "<pre>";
// var_dump($browser, $removePetik, $arrayBrowser, $hasilBroser);
// die();
$os = $_SERVER['HTTP_SEC_CH_UA_PLATFORM'];
?>
<html>

<body>
    <h1>$_SERVER</h1>

    <table border="1">
        <?php foreach ($_SERVER as $key => $value) { ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
        <?php } ?>
    </table>

</body>

</html>