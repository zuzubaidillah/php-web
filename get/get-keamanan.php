<?php
$say = "Hello " . htmlspecialchars($_GET['name'], ENT_QUOTES);
?>
<html>

<body>
    <h1><?= $say ?></h1>
</body>

</html>