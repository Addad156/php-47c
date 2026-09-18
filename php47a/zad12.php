<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Profil ucznia</title>
</head>
<body>
    <?php
    // TODO 1: przygotuj dane ucznia:
    // imię, nazwisko, klasa, średnia, wiek / pełnoletność.
    $imie = "adam";
    $nazwisko = "wojciechowski";
    $klasa = "4G";
    $srednia = 6.1;
    $wiek = 17;
    $pelnoletnosc = false;
    // TODO 2: wyświetl profil w HTML.
    echo "<p>Imie: $imie, Nazwisko: $nazwisko, Klasa: $klasa, Srednia: $srednia, Wiek: $wiek, Pelnoletnosc: $pelnoletnosc";
    // TODO 3: w osobnej części strony pokaż typ każdej zmiennej.
    echo "<p>Typ $imie: " . gettype($imie) . "</p>";
    echo "<p>Typ $nazwisko: " . gettype($nazwisko) . "</p>";
    echo "<p>Typ $klasa: " . gettype($klasa) . "</p>";
    echo "<p>Typ $srednia: " . gettype($srednia) . "</p>";
    echo "<p>Typ $wiek: " . gettype($wiek) . "</p>";
    echo "<p>Typ $pelnoletnosc: " . gettype($pelnoletnosc) . "</p>";
    ?>
</body>
</html>