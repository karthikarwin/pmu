<?php
session_start();
include_once('db.php');
if ( !isset($_POST['addvideo']) ) {
    header('Location: ../login.php');
    exit;
} else {
    $title = $_POST['title'];
    $video = $_POST['video'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s',microtime(true));
    
    $query = "INSERT into videos VALUES('', '$title', '$video', '$date')";

    $exec = mysqli_query($conn, $query);

    if ($exec) {
        $_SESSION['success'] = "Video Added Successfully";
        header('Location: ../videos.php');
        exit;
    } else {
        $_SESSION['error'] = "Something went wrong";
        header('Location: ../videos.php');
        exit;
    }
}

