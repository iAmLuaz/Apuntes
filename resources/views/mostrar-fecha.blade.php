<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Fecha y Hora</title>
</head>
<body>
    <div class='container'>
        <h1>Fecha y Hora</h1>
        <?php
            echo date("l jS \of F Y h:i:s A T");
        ?>
        <br>
        <a href="/">Inicio</a>
    </div>
</body>
</html>