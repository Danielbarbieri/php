<?php


include __DIR__ . '/render.php';

if(verificarUrl("/admin") || verificarUrl("/admin/")) {
    render('painel', '/templates/home.php');
} else if(verificarUrl("/admin/categoria/cadastrar")) {    
    render('cadastro', '/templates/homecadastro.php');
} else{
    echo 'Página não está onnnnnn';
    http_response_code(404);
}
