<?php 
include "Helper.php";

$valor = "10";
echo ($valor ? $valor : 0)."\n";
echo formatarValor($valor)."\n";
$valor = "";
echo formatarValor($valor)."\n";
echo formatarNumero(1000);
?>