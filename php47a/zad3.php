<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sprawdzanie typów</title>
</head>
<body>
    <?php
    // TODO 1: utwórz cztery zmienne:
    // - jedną typu int,
    $int = 67;
    // - jedną typu float,
    $float = 21.37;
    // - jedną typu string,
    $string = "tekst";
    // - jedną typu bool.
    $bul = true;
    // TODO 2: dla każdej zmiennej wyświetl typ za pomocą gettype().
    echo "<p>Typ $int: " . gettype($int) . "</p>";
    echo "<p>Typ $float: " . gettype($float) . "</p>";
    echo "<p>Typ $string: " . gettype($string) . "</p>";
    echo "<p>Typ $bul: " . gettype($bul) . "</p>";
    ?>
</body>
</html>