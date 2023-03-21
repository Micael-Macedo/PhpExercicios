<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Real para Dolar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <div>
            <h2>Conversor de Real para dolar</h2>
            <?php
            $diaAtual = date('m/d/Y');
            $diaAtual = str_replace("/","-", $diaAtual);
            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='03-16-2023'&\$top=100&\$skip=0&\$format=json";
            $data = file_get_contents($url);
            $json = json_decode($data);
            $valorCompra =  json_encode($json->value[0]->cotacaoCompra);
                echo "<h3>Valor atual do dolar $valorCompra </h3>";
            ?>
            <form action="conversao.php" method="post">
                <label for="">Digite o valor em real</label>
                <input type="text" name="valor">
                <button type="submit">Calcular</button>
            </form>
        </div>
    </section>
</body>

</html>