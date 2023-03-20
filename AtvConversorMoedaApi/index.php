<?php 
$real = 500.75;
$diaAtual = date('m/d/Y');
$diaAtual = str_replace("/","-", $diaAtual);
$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='03-16-2023'&\$top=100&\$skip=0&\$format=json";
$data = file_get_contents($url);
$json = json_decode($data);
$valorCompra =  json_encode($json->value[0]->cotacaoCompra);
$valorVenda =  json_encode($json->value[0]->cotacaoVenda);

echo "Valor para compra: $valorCompra \nValor para venda: $valorVenda \nValor em Real para conversão: $real\n valor total convertido em dolar: " . round(($real / floatval($valorCompra)),2);
?>