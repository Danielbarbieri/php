<?php


include __DIR__ . '/render.php';

if(verificarUrl("/admin/login")){
    return require __DIR__ . '/login.php';
}else if(verificarUrl("admin/logout")){
    return require __DIR__ . '/logout.php';
}if(verificarUrl("/admin") || verificarUrl("/admin/")) {
    render('painel', '/templates/home.php');
} else if(verificarUrl("/admin/categoria/cadastrar")) {    
    render('cadastro', '/templates/homecadastro.php');
} else{
    http_response_code(404);
}
