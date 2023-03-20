<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Conversor de Real para Dolar</h1>
    <?php
    $valorString = $_REQUEST['valor'];
    $valorFloat = floatval(str_replace(",", ".", $valorString)) ;
    $dolar = 5.22;
    echo "R$ $valorString = $" . round($valorFloat / $dolar, 2);
    ?>
    </div>
    
</body>
</html>