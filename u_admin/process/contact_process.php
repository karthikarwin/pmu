<?php
session_start();
include_once('db.php');
if ( !isset($_POST['update']) ) {
    header('Location: ../login.php');
    exit;
} else {
    $mob1 = mysqli_real_escape_string($conn, $_POST['mobile1']);
    $mob2 = mysqli_real_escape_string($conn, $_POST['mobile2']);
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $fb = $_POST['fb'];
    $tw = $_POST['tw'];
    $li = $_POST['linked'];
    $gp = $_POST['gp'];
    $ins = $_POST['insta'];
    $landl1 = $_POST['ll1'];
    $landl2 = $_POST['ll2'];

    $query = "UPDATE contact SET 
        u_address = '".$address."',
        u_mob1 = '".$mob1."',
        u_mob2 = '".$mob2."',
        u_ll1 = '".$landl1."',
        u_ll2 = '".$landl2."',
        u_fb = '".$fb."',
        u_tw = '".$tw."',
        u_li = '".$li."',
        u_gp = '".$gp."',
        u_ins = '".$ins."',
        u_email1 = '".$email1."',
        u_email2 = '".$email2."'
    WHERE u_id = 1";

    $exec = mysqli_query($conn, $query);

    if ($exec) {
        $_SESSION['success'] = "Contact Details updated successfully";
        header('Location: ../contacts.php');
        exit;
    } else {
        /* $_SESSION['error'] = "Some Error Occurred";
        header('Location: ../contacts.php');
        exit; */
        die(mysqli_error($conn));
    }

}