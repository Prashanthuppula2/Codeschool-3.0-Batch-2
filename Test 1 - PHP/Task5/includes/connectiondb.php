<?php

require_once("functions.php");


define("DB_HOST", "localhost");
define("DB_PORT", "5432");
define("DB_NAME", "property_hosting");
define("DB_USER", "postgres");
define("DB_PWD", "Prashi@23");


    try {
        $conStr = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";user=" . DB_USER . ";password=" . DB_PWD;
        $pdo = new \PDO($conStr);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
    } catch(\PDOException $e){
        http_response_code(500);
        response("Server Error");
    }