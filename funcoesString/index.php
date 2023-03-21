<?php

$texto = "  Hello world ";
$textoFiltrado = trim($texto);
$lenght = strlen($texto);
echo $lenght;
echo "\nespaços cortados no inicio e fim " . strlen($textoFiltrado);
echo "\nencontrando 'l' da direita para esquerda" . strrpos($textoFiltrado, 'l');
echo "\nTexto cortado " . substr($textoFiltrado, 0, 5);