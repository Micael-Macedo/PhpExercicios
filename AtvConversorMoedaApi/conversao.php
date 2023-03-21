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
    <section>
        <div class="result">
            <h2>Resultado</h2>
            <?php 
                $real = $_POST["valor"];
                $userVal =  floatval(str_replace(',','.', $real));
                $diaAtual = date('m/d/Y');
                $diaAtual = str_replace("/","-", $diaAtual);
                $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='03-16-2023'&\$top=100&\$skip=0&\$format=json";
                $data = file_get_contents($url);
                $json = json_decode($data);
                $valorCompra =  json_encode($json->value[0]->cotacaoCompra);
                $valorVenda =  json_encode($json->value[0]->cotacaoVenda);

                echo "<p>Valor para compra: \$$valorCompra </p>\n<p>Valor para venda: \$$valorVenda </p>\n<p>Valor em Real para conversão: 
                R\$$real</p>\n<p> valor total convertido em dolar: \$" . round(($userVal / floatval($valorCompra)),2) ."</p>";
                ?>
        </div>
    </section>
    
</body>
</html>