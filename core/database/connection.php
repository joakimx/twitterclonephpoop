<?php
    $dsn = 'mysql:host=localhost; dbname=tweety';
    $user = 'tweetymod';
    $pass = 'P@ssw0rd';

    try{
        $pdo = new PDO($dsn, $user, $pass);
        if ($pdo) {
            echo "Connected!";
        }
    } catch (PDOException $e){
        echo 'Connection error! ' .$e->getMessage();
    }

?>