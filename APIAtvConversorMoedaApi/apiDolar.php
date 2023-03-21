<?php
function getDolar(){
    $json = getAtualDolar();
    $valorCompra =  json_encode($json->value[0]->cotacaoCompra);
    $valorVenda =  json_encode($json->value[0]->cotacaoVenda);
    return $valorCompra;
}
function getInfoDolar(){
    $json = getAtualDolar();
    return json_encode($json->value[0]);
}
function getAtualDolar(){
    $diaAtual = date('m/d/Y');
    $diaAtual = str_replace("/", "-", $diaAtual);
    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='03-16-2023'&\$top=100&\$skip=0&\$format=json";
    $data = file_get_contents($url);
    return json_decode($data);
}
function realToDolar(float $real){
    $valorDolar = getDolar();
    return $real/$valorDolar;
}
