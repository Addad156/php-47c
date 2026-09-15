<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1 — Koszt pakietu wyposażenia</title>
</head>
<body>
<?php

	$cena = 19.50;
$ilosc = 3;
$dostawa = 15;
$rabat = 6;
$osoby = 3;
$bok = 5;
echo "<p>koszt pakietu: " . ($cena * $ilosc + $dostawa - $rabat) . "</p>";
echo "<p>koszt na osobe: " . (($cena * $ilosc + $dostawa - $rabat) / $osoby). "</p>";
   


?>
</body>
</html>