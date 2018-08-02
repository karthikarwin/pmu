<?php

/* $u_host = "unikerz.aakkamcreations.com";
$u_user = "unikerz_db";
$u_pwd = "Uni1kerz@1"; */

$u_host = "localhost";
$u_user = "root";
$u_pwd = "";

$db_name = "unikerz";

$conn = mysqli_connect($u_host, $u_user, $u_pwd, $db_name);
if (!$conn) {
	die(mysqli_error());
} else {
}
?>