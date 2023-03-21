<?php 
    date_default_timezone_set("America/Sao_Paulo");
    var_dump($_SERVER['REQUEST_URI']);
    echo "Bem vindo ao index";
    echo $_SERVER['REQUEST_METHOD'];
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case '/' :
            require __DIR__ . '/views/index.php';
            break;
        case '' :
            require __DIR__ . '/views/index.php';
            break;
        case '/about' :
            require __DIR__ . '/views/about.php';
            break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
?>