<?php
    session_start();
    
    $conn = new mysqli('remotemysql.com', 'V8lDRzoT0J', '5ck7Ef43x5');
    mysqli_select_db($conn, "V8lDRzoT0J");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE username ='$username' && password ='$password'");
    $rows = mysqli_num_rows($query);
    if($rows == 1){
        $_SESSION['username'] = $username;
        header('location: dashboard.php');
    }
    else{
        echo 'Your username or password is not correct!!!';
    }
?>