<?php
    include 'database/connection.php';
    include 'classes/user.php';
    include 'classes/tweet.php';
    include 'classes/follow.php';

    global $pdo;

    //Start session
    session_start();

    $getFromU = new User($pdo);
    $getFromT = new Tweet($pdo);
    $getFromF = new Follow($pdo);

    define("BASE_URL", "http://localhost/twitter/");
?>