<?php 
include_once __DIR__ . '/classes/Smartphone.php';
include_once __DIR__ . '/classes/Computer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e OOP 2: Ereditarietà</title>
</head>
<body>
<h1>Prodotti</h1>

<p><?php echo "{$smartphone->print()} {$smartphone->memoria} {$smartphone->colore}" ?></p>
<p><?php echo $smartphone2->print() . ' ' . $smartphone2->memoria . ' ' . $smartphone2->colore ?></p>
<p><?php echo $computer->print() ?></p>
<h4><?php // echo $smartphone->dettagli(); ?></h4>
<h4><?php // echo $computer->dettagli(); ?></h4>

</body>
</html>