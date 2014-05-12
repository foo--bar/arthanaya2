<?php
	require 'conn.php';
	#unset($_COOKIE['owner']);
	#setcookie('owner');
	setcookie('owner', ' ',time()-3600);
	header("Location:index.php");
?>