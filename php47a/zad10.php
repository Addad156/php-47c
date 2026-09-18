<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Nowdoc</title>
</head>
<body>
<?php 
$cena = 199; 

$nowdoc = <<<'TXT'
<p> cena auta: $cena </p>
TXT;

echo $nowdoc; 

?>
</body>
</html>


    <?php
  //  $cena = "199";
   // $nowdoc = <<<'TXT'
   // <p> cena auta: "$cena" </p>
   // TXT;
    // TODO:
    // utwórz blok nowdoc zawierający dosłowny napis $cena.
    // Po wyświetleniu na stronie ma być widoczny znak $ i nazwa zmiennej.
  //  echo $nowdoc;