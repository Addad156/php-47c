<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4 — Tablica asocjacyjna ucznia</title>
</head>
<body>

<?php

$uczen = [
    'imie' => 'adam',         
    'nazwisko' => 'wojciechowski', 
    'klasa' => '4g2',         
    'srednia' => 3.67        
];


echo "<h2>" . $uczen['imie'] . " " . $uczen['nazwisko'] . "</h2>";


echo "<p><strong>Klasa:</strong> " . $uczen['klasa'] . "</p>";
echo "<p><strong>Średnia ocen:</strong> " . $uczen['srednia'] . "</p>";
?>
    

</body>
</html>