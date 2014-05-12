<?php
	$db = mysql_connect("localhost","root","") or die(mysql_error());
	$con = mysql_select_db("sedatabase", $db) or die(mysql_error());
?>