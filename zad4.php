<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4 — Kod dostępu: wartość a typ</title>
</head>
<body>
<?php

$kod = 72;
$kodtekst = "72";


echo "<pre>";
var_dump($kod == $kodtekst);
var_dump($kod === $kodtekst);
var_dump($kod != $kodtekst);
var_dump($kod !== $kodtekst);
var_dump($kod >= 70);





echo "</pre>";









?>

</body>
</html>