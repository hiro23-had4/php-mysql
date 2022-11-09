<?php 

function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "sena";
    try {
        $pdo = new PDO('mysql:host='.$host. ';dbname='.$database,$user,$pass);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
    }catch(PDOException $e) {
        die($e -> getmessage());
    };
}


?>
