<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="index.php" method="get">
        <fieldset>
            <legend>Informações do Personagem</legend>

            <label for="valor01">Valor 1</label>
            <input type="text" name="valor01" id="valor01" placeholder="0" required>

            <br>

            <label for="valor02">Valor 2</label>
            <input type="text" name="valor02" id="valor02" placeholder="0" required>

            <br>

            <input type="submit" value="Calcular">
        </fieldset>
    </form>

    <?php
    if (isset($_GET['valor01'])) {
        if (empty($_GET['valor01'])) {
            echo '<br> Valor 1 obrigatório!'; 
        }
    } else {
        exit();
    }

    if (isset($_GET['valor02'])) {
        if (empty($_GET['valor02'])) {
            echo '<br> Valor 2 obrigatório!';
        } 
    } else {
        exit();
    }

            echo $_GET['valor01'] + $_GET['valor02'];
    ?>

</body>
</html>