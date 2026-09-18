<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dynamiczne typowanie</title>
</head>
<body>
    <?php
    $dane = 100;

    // TODO 1: wyświetl typ zmiennej $dane.
    echo "<p> typ $dane: " . gettype($dane) . "</p>";
    // TODO 2: przypisz do tej samej zmiennej tekst "100" i pokaż typ.
    $dane = "tekst";
    echo "<p> typ $dane: " . gettype($dane) . "</p>";
    // TODO 3: przypisz 3.5 i pokaż typ.
    $dane = 3.5;
    echo "<p> typ $dane: " . gettype($dane) . "</p>";
    // TODO 4: przypisz false i pokaż typ.
    $dane = false;
    echo "<p> typ $dane: " . gettype($dane) . "</p>";
    ?>
</body>
</html>