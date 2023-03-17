<?php 
$r = "235,45";
$r = str_replace(",", ".", $r);
$rFloat = floatval($r);
$dolar = 5.22;
echo round($rFloat / $dolar, 2);
?>