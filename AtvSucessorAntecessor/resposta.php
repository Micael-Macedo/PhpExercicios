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
    <h2>Resultado final</h2>
    <?php 
        $n = $_REQUEST['num'];
        echo "sucessor" . $n+1;
        echo "antecessor" . $n-1;
    
    ?>
</body>
</html>