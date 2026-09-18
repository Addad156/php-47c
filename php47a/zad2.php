<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zmienne w PHP</title>
</head>
<body>

    <?php
    $x = 17;
    $tekst = "Adam";
    $y = $x - 7;

    echo "<h1>Witamy na stronie użytkownika: $tekst</h1>";
    echo "<p>$x + $y = " . ($x + $y) . "</p>";
    ?>

</body>
</html>