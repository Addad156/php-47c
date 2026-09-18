<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Heredoc</title>
</head>
<body>
    <?php
    $nazwa = "Monitor";
    $cena = 899;
    $opis = "Przykładowy opis produktu.";

    // TODO:
    // utwórz przez heredoc fragment <article>,
    // w którym znajdą się <h2> oraz dwa akapity.
    $tekst = <<<EOD
    <article>
      <h2> Naglowek article </h2>
      <p> akapit1 </p>
      <p> chyba drugi akapit </p>
    </article>
    EOD;

    // Następnie wyświetl przygotowany tekst.
    echo $tekst;
    ?>
</body>
</html>