
<?php
    // 0x = hexadecimal 0b = binario 0 = octal
    $num = 0x1A;
    $num1 = 010;
    $num2 = 0b0101;
    $num3 = 3e2; // 3 x (10)²

    echo " $num $num1 $num2 \n";
    var_dump($num, $num1, $num2);
    $namorando = false;
    $solteiro = true;
    echo ("namorando: $namorando solteiro: $solteiro \n");
    $var = ["Micael", 6, 5.23, false, 0x1A];
    class Pessoa{
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($var);
    var_dump($p);
?>
