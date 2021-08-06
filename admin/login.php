<?php


session_start();

const ADMIN = 'admin';
const SENHA = '123';

if(isset($_POST) 
    && isset($_POST['admin']) && $_POST['admin'] == ADMIN 
    && isset($_POST['senha']) && $_POST['senha'] == SENHA){
    $_SESSION['autenticado'] = true;
    echo $_SESSION['autenticado'];
    header('location: /admin');
}else{
    header('location: /');
}