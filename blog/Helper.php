<?php


/**
 * Realiza uma saudação conforme o horario da bahia
 * @return string saudação baseada no horário
 */
function saudacao()
{
    $hora = date("H");
    var_dump($hora);
    if ($hora >= 0 and $hora <= 5) {
        return "Boa madrugada";
    } elseif ($hora >= 6 and $hora < 12) {
        return "Bom dia";
    } elseif ($hora >= 12 and $hora < 18) {
        return "Boa Tarde";
    } else {
        return "Boa noite";
    }
}
/**
 * Resume um texto informando a limitação
 * @param string $texto texto para resumir
 * @param int $limite quantidade máxima de caracteres
 * @return string texto resumido
 */
function resumirTexto(string $texto, int $limite)
{
    $texto = trim($texto);
    if (strlen($texto) > $limite) {
        $textoResumido = substr($texto, 0, $limite);
        return $textoResumido;
    }
    return $texto . "...";
}

function contarTempo(string $data)
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;
    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $horas = round($diferenca / 3600);
    $dias = round($diferenca / 86400);
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca / 2419200);
    $anos = round($diferenca / 29030400);
    if ($segundos <= 60) {
        return 'agora';
    } elseif ($minutos <= 60) {
        return $minutos == 1 ? 'há 1 minuto' : "há $minutos minutos";
    } elseif ($horas <= 24) {
        return $horas == 1 ? 'há 1 hora' : "há $horas horas";
    } elseif ($dias <= 7) {
        return $dias == 1 ? 'há ontem' : "há $dias dias";
    } elseif ($semanas <= 4) {
        return $semanas == 1 ? 'há 1 semana' : "há $semanas semanas";
    } elseif ($meses <= 12) {
        return $meses == 1 ? 'há 1 mês' : "há $meses meses";
    } elseif ($anos <= 1) {
        return $anos == 1 ? 'há 1 ano' : "há $anos anos";
    }
}

function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function validarUrl(string $url): bool
{
    if(filter_var($url, FILTER_VALIDATE_URL)){
        if(!str_contains($url,".")){
            return false;
        }
        if(!str_contains($url, "http://") or !str_contains($url, "https://")){
            return false;
        }
        return true;
    }
}
function getInfoServer(){
    return $_SERVER;
}
function localhost(string $url){
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == "localhost" ? URL_DESENVOLVIMENTO : URL_PRODUCAO);
    return $ambiente.$url;
}
function dataAtual(){
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date("n") - 1;
    $ano = date('Y');

    $nomesDiasDaSemana = ['Domingo', 'Segunda', 'Terça', "Quarta", "Quinta", "Sexta", "Sabado"];
    $nomesMeses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];

    $diaFormatado = "$nomesDiasDaSemana[$diaSemana], $diaMes de $nomesMeses[$mes] de $ano";

    return $diaFormatado;
}