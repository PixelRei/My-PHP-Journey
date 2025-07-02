<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stringhe</title>
</head>
<body>
    <?php
    $nome = "Goldon";
    $età = 14;
    $saluto = "Benvenuto %s, hai %d anni"; //s for strings, d for numbers
    ?>
    <h1><?=sprintf($saluto, $nome, $età)?></h1>
</body>
</html>