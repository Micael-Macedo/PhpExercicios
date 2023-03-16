<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Senha</td>
        </tr>
        <?php foreach ($model->rows as $item) : ?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->nome ?></td>
                <td><?= $item->email ?></td>
                <td><?= $item->senha ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>