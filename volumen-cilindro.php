<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volumen cilindro</title>
</head>
<body>
<form action="volumen-cilindro.php" method="post">
    <label for="altura">Altura: </label><input type="text" id="altura" name="altura">
    <label for="diametro">Diametro: </label><input type="text" id="diametro" name="diametro">
    <label for="litros-por-segundo">Litros por segundo</label><input type="text" id="litros-por-segundo" name="lit-p-seg">
    <input type="submit" id="enviar" value="enviar">
</form>
<?php
if(isset($_REQUEST['altura']) && isset($_REQUEST['diametro'])){
    $altura = $_REQUEST['altura'];
    $diametro = $_REQUEST['diametro'];
    $radio = $diametro / 2;
    $litros_minuto = $_REQUEST['lit-p-seg'];
    $volumen = pi() * ($radio*$radio) * $altura * 1000;
    echo "<p>" . $volumen / $litros_minuto . "</p>";
}
?>
</body>
</html>
