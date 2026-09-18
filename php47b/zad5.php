<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5 — Produkt — karta HTML</title>
</head>
<body>

<?php
$produkt = [
    'nazwa' => '67',
    'cena' => 2499.99,       
    'stan' => true 
]; 
        
$produkt['producent'] = 'samsung';
$produkt['kod'] = 'sm232175';
$dostepnosc = $produkt['stan'] ? 'Dostępny' : 'Niedostępny';
?>
<article>
    <h1><?php echo htmlspecialchars($produkt['nazwa']); ?></h1>
    <p><strong>Cena:</strong> <?php echo number_format($produkt['cena'], 2, ',', ' '); ?> PLN</p>
    <p><strong>Stan:</strong> <?php echo $dostepnosc; ?></p>
    <p><strong>Producent:</strong> <?php echo htmlspecialchars($produkt['producent']); ?></p>
    <p><strong>Kod produktu:</strong> <?php echo htmlspecialchars($produkt['kod']); ?></p>
</article>
</body>
</html>