<?php
session_start();
    if(!isset($_POST['login'])) {
        header('Location: ../login.php');
        exit;
    } else {
        include_once('db.php');

        $uname = $_POST['username'];
        $pwd = $_POST['password'];

        $query = "SELECT * FROM users WHERE uname = '$uname' && pwd = '$pwd'";

        $exec = mysqli_query($conn, $query);

        if (mysqli_num_rows($exec) > 0) {
            $_SESSION['user'] = $uname;
            header('Location: ../index.php');
            exit;
        } else {
            $_SESSION['error'] = "Wrong Credentials";
            header('Location: ../login.php');
            exit;
        }
    }
    
?>