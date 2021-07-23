<?php

function verificarUrl($rota) {
    $caminho = $_SERVER['REQUEST_URI'];

    $rota = str_replace('/', '\/', $rota);

    if (preg_match('/^' . $rota .'$/', $caminho)){
        return true;
    }
}

if(verificarUrl("/admin?(.*)")) {
    require __DIR__ . '/admin/routes.php';
} else if (verificarUrl("/")){
    require __DIR__ . '/site/routes.php';
}else {
    echo "Página não encontrada";
    http_response_code(404);
}