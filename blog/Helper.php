<?php
date_default_timezone_set('America/Bahia');
/**
 * Realiza uma saudação conforme o horario da bahia
 * @return string saudação baseada no horário
 */
function saudacao(){
    $hora = date("H");
    var_dump($hora);
    if($hora >= 0 and $hora <= 5){
        return "Boa madrugada";
    }elseif($hora >= 6 and $hora < 12){
        return "Bom dia";
    }
    elseif($hora >= 12 and $hora < 18){
        return "Boa Tarde";
    }else{
        return "Boa noite";
    }
}
/**
 * Resume um texto informando a limitação
 * @param string $texto texto para resumir
 * @param int $limite quantidade máxima de caracteres
 * @return string texto resumido
 */
function resumirTexto(string $texto, int $limite){
    $texto = trim($texto);
    if(strlen($texto) > $limite){
        $textoResumido = substr($texto,0,$limite);
        return $textoResumido;
    }
    return $texto."...";
}