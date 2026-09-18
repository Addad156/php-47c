<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Karta ucznia</title>
</head>
<body>
    <?php
    $imie = "Adam";
    $nazwisko = "wojciechowski";
    $klasa = "4g2";

    // TODO: używając operatora kropki:
    // 1) zbuduj nagłówek z imieniem i nazwiskiem,
    echo "<h1> " . $imie . " " . $nazwisko . "</h1>";
    // 2) zbuduj akapit z nazwą klasy.
    echo "<p>" . $klasa . "</p>";
    ?>
</body>
</html>