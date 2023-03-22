<?php 
function formatarValor(string $num){
    return number_format(($num ? $num : 0), 2,',','.');
}
function formatarNumero(string $num){
    return number_format($num ?: 0, 0,'.','.');
}
?>