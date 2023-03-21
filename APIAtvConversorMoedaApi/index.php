<?php

$url = $_SERVER['REQUEST_URI'];
$_SERVER['REQUEST_METHOD'];
switch ($url) {
    case "/PhpExercicios/APIAtvConversorMoedaApi/":
        include "apiDolar.php";
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            echo getInfoDolar();
        }
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $post = json_decode(file_get_contents('php://input'));
            $valor = json_encode($post->valor);
            echo realToDolar($valor);
        }
        break;
    case"/converter":
    
    
    
        break;
}
