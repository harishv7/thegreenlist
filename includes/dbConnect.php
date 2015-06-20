<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'greenlist';
	
	$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die(mysqli_error($connect));
?>