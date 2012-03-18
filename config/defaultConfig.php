<?php
try{
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);  
}  
catch(PDOException $e) {  
    echo $e->getMessage(); 
}

function __autoload($classname) {
    $filename = "../core/classes/". $classname .".php";
    include_once($filename);
}

