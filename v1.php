<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Palavra</title>
</head>
<body>
    <h1>Impressora de Palavra</h1>
    <form method="post">
        <label for="palavra">Digite uma palavra:</label><br>
        <input type="text" id="palavra" name="palavra"><br>
        <input type="submit" value="Imprimir"><br>

    <?php

function imprimePalavra($palavra) {
    for ($i = 1; $i <= 4; $i++) {
        echo str_repeat(strtoupper ($palavra." "), $i). "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = $_POST["palavra"];
    imprimePalavra($palavra)."<br>";
}
    ?>

</body>
</html>
