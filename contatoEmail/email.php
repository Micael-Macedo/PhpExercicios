<?php 
$titulo = $_POST['titulo'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
var_dump($mensagem);
$to = "micaelm2009@hotmail.com";
$sub = "Contato Freelance " . $titulo; 
$body = "Nome: " . $nome . "\r\n" .
        "Email: " . $email . "\r\n" .
        "Mensagem: " . $mensagem . "\r\n";
$header="From:micaelm2009@hotmail.com". "\r\n"
        ."Reply-To". $email . "\e\n"
        ."X=Mailer:PHP/" .phpversion();

if(mail($to,$sub,$body,$header)){
    echo("Email enviado com sucesso");
}else{
    echo("Email não pode ser enviado");
}

?> 