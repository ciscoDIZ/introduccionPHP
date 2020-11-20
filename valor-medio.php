<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valor medio PHP</title>
</head>
<body>
    <form action="valor-medio.php" method="post">
        <label for="tienda1">Tienda 1</label><input type="text" id="tienda1" name="tienda[]"><label
            for="tienda2">Tienda 2</label><input
            type="text"
            id="tienda2"
            name="tienda[]"><label
            for="tienda3">Tienda 3</label><input type="text" id="tienda3" name="tienda[]">
            <input type="submit">
    </form>
    <?php
        $valores = $_REQUEST['tienda'];
        $sum = 0;
        for($i = 0; $i<count($valores);$i++){
            $sum += $valores[$i];
        }
        if($valores != null){
            echo '<p>' . $sum / count($valores) . '</p>';
        }

    ?>
</body>
</html>
