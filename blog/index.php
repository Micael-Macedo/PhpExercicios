<?php
require_once 'app/config.php';
include 'Helper.php';

$texto = "Bem vindo ao meu blog";
echo resumirTexto($texto, 12);