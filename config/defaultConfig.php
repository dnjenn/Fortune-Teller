<?php

include(BASE."core/classes/database.php");

$database = new Database($host, $dbname, $user, $password, $dbType);

function __autoload($classname) {
    $filename = "../core/classes/". $classname .".php";
    include_once($filename);
}

