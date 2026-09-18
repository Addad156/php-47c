<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Apostrofy i cudzysłowy</title>
</head>
<body>

    <?php
    $kolor = "blond";

    echo "<p>Kasia ma włosy $kolor</p>";
    echo '<p>Basia ma włosy $kolor</p>';
    echo '<p>Basia ma włosy ' . $kolor . '</p>';
    ?>

</body>
</html>