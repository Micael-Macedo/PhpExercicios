<?php 
$real = 500.75;
$diaAtual = date('m/d/Y');
$diaAtual = str_replace("/","-", $diaAtual);
$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='03-16-2023'&\$top=100&\$skip=0&\$format=json";
$json = file_get_contents($url);
$data = json_decode($json);
echo $data->value;
?>