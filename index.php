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
<?php 
var_dump($prodotto);
var_dump($smartphone);
var_dump($computer);
?>

<p><?php echo "{$smartphone->print()} {$smartphone->memoria} {$smartphone->colore}" ?></p>
<p><?php echo $computer->print() ?></p>
</body>
</html>