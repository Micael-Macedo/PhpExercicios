<?php
require_once 'app/config.php';
include 'Helper.php';

$texto = "Bem vindo ao meu blog";
echo resumirTexto($texto, 12);
echo contarTempo("2022-03-22 11:20:00");
if(validarEmail("micael@hotmail.com")){
    echo "Email validado com sucesso";
}else{
    echo "Email inválido";
}
var_dump(localhost("admin"));
