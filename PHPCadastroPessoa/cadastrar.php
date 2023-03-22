<?php
    include("Model/pessoa.php");
    $pessoa = new Pessoa();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pessoa->nome = $_POST['nome'];
        $pessoa->email = $_POST['email'];
        $pessoa->senha = $_POST['senha'];
        
    }
    header("Location: http://localhost/phpExercicios/PHPCadastroPessoa/homePessoa.php?vals=".urlencode(serialize($pessoa)));
    exit;
?>