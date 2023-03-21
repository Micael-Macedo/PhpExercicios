<?php 
$r = -200;
echo "Valor absoluto " . abs($r) ."\n";
$r = 2;
echo "valor raiz quadrada ". sqrt($r) ."\n";
echo " conversor para binario ". base_convert(254, 10, 2) ."\n";
echo " conversor para octal ". base_convert(254, 10, 8) ."\n";
echo " conversor para decimal ". base_convert(254, 10, 10) ."\n";
echo " conversor para hexadecimal ". base_convert(254, 10, 16) ."\n";
$r = 2.5;
echo "Arredondar para cima ". ceil($r) ."\n";
echo "Arredondar para baixo ". floor($r) ."\n";
echo "Arredondar para o mais próximo ". round($r) ."\n";
echo "Calcula hipotenuta ". hypot(3,4) ."\n";
echo "Divisão Arredondar para cima ". intdiv(1, 2) ."\n";
echo "Valor maximo ". max(1,3,6,2,3,8,3,2) ."\n";
echo "Valor minimo ". min(1,3,6,2,3,8,3,2) ."\n";
echo "Valor de pi ". pi() ."\n";
echo "Valor de elevado a potencia ". pow(2,4) ."\n";
?>