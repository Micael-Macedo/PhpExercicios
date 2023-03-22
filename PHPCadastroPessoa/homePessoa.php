<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="public/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
        <ul>
            <li>
                <a href="homePessoa.php">Home Pessoa</a>
            </li>
        </ul>
    </nav>
</header>

<body>
    <main>
        <section>
        <div>

            <?php
            include('Model/pessoa.php');
            if ($_GET['vals'] != NULL) {
                $pessoa = unserialize(urldecode($_GET['vals']));
                echo "<h2>Seja bem vindo $pessoa->nome</h2>";
                echo "<p>Email: $pessoa->email<p> \n<p>Senha: $pessoa->senha</p>";
            } else {
                header("Location: http://localhost/phpExercicios/PHPCadastroPessoa/index.php");
                exit;
            }
            ?>
    </div>
        </section>
    </main>

</body>

</html>