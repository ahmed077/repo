<?php
//    Mysql Connect
$dsn = 'mysql:host=localhost;dbname=mbb';
$user = 'root';
$pass = '';
try {
    $con = new PDO($dsn, $user, $pass);
}
catch(PDOException $e) {
    $errmessage = $e->getMessage();
}
//    Mysql Connect
