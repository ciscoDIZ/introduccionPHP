<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request PHP</title>
</head>
<body>
    <form action="request-php.php" method="post">
        <label for="altura">Altura: </label><input type="text" id="altura" name="altura">
        <label for="diametro">Diametro: </label><input type="text" id="diametro" name="diametro">
        <input type="submit" id="enviar" value="enviar">
    </form>
    <?php
        if(isset($_REQUEST['altura']) && isset($_REQUEST['diametro'])){
            $altura = $_REQUEST['altura'];
            $diametro = $_REQUEST['diametro'];
            echo "<p>".pi() * $diametro * $altura."</p>";
        }
    ?>
</body>
</html>
