<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro de pessoa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://localhost:8000/Public/css/style.css">
    </head>

    <body>
        <h1>Hello World</h1>
        <form method="post" action="/pessoa/form/save">
            <label for="">Nome</label>
            <input type="text" name="nome">
            <label for="">Email</label>
            <input type="email" name="email">
            <label for="">Senha </label>
            <input type="text" name="senha">
            <button type="submit">Salvar</button>
        </form>
    </body>

</html>