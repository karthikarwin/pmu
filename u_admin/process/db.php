<?php

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