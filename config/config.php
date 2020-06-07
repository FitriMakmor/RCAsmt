<?php

try {
    $connString = "mysql:host=localhost;dbname=runcloud";
    $user = "user";
    $pass = "userpwd";

    $pdo = new PDO($connString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die($e->getMessage());
}

?>