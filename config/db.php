<?php
    // connect design
     $connect = mysqli_connect('remotemysql.com','V8lDRzoT0J','5ck7Ef43x5','V8lDRzoT0J');
    if($connect){
        mysqli_query($connect, "SET NAME 'UTF8'");
    }
    else{
        echo "It's not working";
    }
    /*
    $host = 'remotemysql.com';
    $db = 'FRJpWLEmkg';
    $user = 'FRJpWLEmkg';
    $pass = 'AHaNJUGMfo';
    $charser = 'utf8mb4';

    $dsn = "mysql:host=$host; dbname=$name; charset=$charser";
    
    try {
        $pdo = new PDO($pdo, $user, $pass);
        $pdo -> setAttrible(PDO::ATTR_ERRMODE, PDO::ERRMODE:EXCEPTION);
    }
    catch(PDOException $e){
        throw new PDOException($e->getMessage())
    }
    */
?>