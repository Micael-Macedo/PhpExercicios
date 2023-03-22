<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="homePessoa.php">HomePessoa</a>
                </li>
                <li></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <form action="cadastrar.php" method="post">
                <div>
                    <label for="">Digite o seu Nome</label>
                    <input type="text" name="nome">
                </div>
                <div>
                    <label for="">Digite seu email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">Digite sua senha</label>
                    <input type="password" name="senha">
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        </section>
    </main>
</body>

</html>