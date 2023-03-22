<?php
require_once 'app/config.php';
include 'Helper.php';

$texto = "Bem vindo ao meu blog";
echo resumirTexto($texto, 12);
echo contarTempo("2022-03-22 11:20:00");