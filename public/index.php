<?php
// abrir a sessao
session_start();

// carregar o config
require_once('../config.php');

// carrega todas as classes do projeto
require_once('../vendor/autoload.php');

/*
carregar o config
carregar classes
carregar o sistema de rotas
    - mostrar rotas
    - mostrar carrinho
    - mostrar o backoffice, etc
*/