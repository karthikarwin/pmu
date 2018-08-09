<?php
	$whitelist= array('127.0.0.1', '::1');

	if(in_array($_SERVER['REMOTE_ADDR'],$whitelist)){
		$conn = mysqli_connect('localhost','root','', 'unikerz') or die('cannot connect to the server');
	}
	else{
		$conn = mysqli_connect('unikerz.aakkamcreations.com','unikerz_db','Uni1kerz@1', 'unikerz') or die('cannot connect to the server');
	}
?>