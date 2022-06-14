<?php

declare(strict_types=1);

namespace App\Connection;


abstract class Connection{  
    public static function getConnection(): \PDO{
        $database = "mysql:host=localhost;dbname=db_store";
        $username = "root";
        $senha = '12';

        return new \PDO($database, $username,  $senha);
    }
};