<?php 
	require 'conn.php';
	$get_passwd=$_POST['val'];
	#echo 'passwd='.$get_passwd;
	$pass = mysql_query('SELECT * FROM password');
	$row = mysql_fetch_row($pass);
	$value=$row['0'];
	#echo $value."<br>";
	if($value==$get_passwd) {
		echo "passwords match!";
		setcookie('owner', ' ',time()+60*60*60);
		header("Location:new_index.php");
	}
	else {
		echo "Enter Valid Password!!";
		header("Location:index.php?err=1");
	}
?>