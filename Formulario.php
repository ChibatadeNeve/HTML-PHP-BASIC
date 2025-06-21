<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="Formulario.php" method="POST">
        Name: <input type="text" name="nome" required><br><br>
        Idade: <input type="number" name="idade" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        echo "<h3>Ola, $nome!</h3>";

        if ($idade >=18) {
            echo "Voce é maior de idade.";
        } else {
            echo "Voce é menor de idade.";
        }
    }
    ?>  
</body>
</html>