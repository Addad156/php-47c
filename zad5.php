<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5 — Dostęp do panelu: połącz warunki</title>
</head>
<body>

<?php

 $wiek = 16;
$mazgode = true;
$zalogowany = true;


echo "<pre>";
var_dump($wiek>=18 && $mazgode);
var_dump($wiek <18 || $mazgode);
var_dump(!$mazgode);
echo "</pre>"

?>
</body>
</html>