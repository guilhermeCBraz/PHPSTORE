<?php

namespace core\classes;

use PDO;

class Database
{
    private $ligacao;

    private function ligar()
    {
        $this->ligacao = new PDO(
            'mysql:' .
                'host=' . MYSQL_SERVER . ';' .
                'dbname=' . MYSQL_DATABASE . ';' .
                'charset=' . MYSQL_CHARSET,
        );
    }
}

/*
define('MYSQL_SERVER',      'localhost');
define('MYSQL_DATABASE',    'php_store');
define('MYSQL_USER',        'user_php_store');
define('MYSQL_PASS',        '');
define('MYSQL_CHARSET',     'utf-8');
*/