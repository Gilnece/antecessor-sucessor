<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = $_POST['numero'];

        if (is_numeric($numero)){

            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "<p>Proximo numero é: $antecessor</p>";
            echo "<p>Número escolhido foi: $numero</p>";
            echo "<p>O antecessor é: $sucessor</p>";
        }else{
            echo "Digite um numero valido!";
        }
    }
    ?>
    
</body>
</html>
