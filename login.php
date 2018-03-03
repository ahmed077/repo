<?php
ob_start();
session_start();
require_once 'connect.php';
if(isset($_SESSION["name"])){
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $query = $con->prepare('SELECT * FROM users Where username = ? and password = ?');
    $query->execute(array(sha1($name), sha1($password)));
    $count = $query->rowCount();
    if ($count > 0) {
        $row = $query->fetchAll(PDO::FETCH_ASSOC)[0];
        $_SESSION['admin'] = 1;
        header("Location: events/MBB.php");
        exit();
    } else {
//        header("Location: index.html");
//        exit();
    }
} else {
//    header("Location: index.html");
//    exit();
}
ob_end_flush();
?>