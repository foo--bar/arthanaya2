<!DOCTYPE html>
<html lang="en">

	<head>
		<link rel="stylesheet" type="text/css" href="table.css">
		<meta charset="utf-8">
		<script type="text/javascript">
			function popup(){
				alert('Customer Added Successfully');
				window.location="index.php";
			}
		</script>
		
	</head>
	<body onload="popup()">
		<a href="index.php"><img src = "./logo.png" align = "right" alt="Saubhadra Industries logo"></a>
		<br><br><br><br><br><br><br>
		
		
		<?php
		include 'conn.php';
		if(!isset($_COOKIE['owner'])) {
				echo "cookie not set!";
				header("Location:index.php");
			}
		if((isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['company'])))
		{
		  $cust_name = $_POST['name'];
		  $cust_email = $_POST['email'];
		  $cust_contact = $_POST['contact'];
		  $cust_company = $_POST['company'];
		  
		  
		  if(!empty($cust_name) && !empty($cust_email) && !empty($cust_contact) && !empty($cust_company))
		  {  
			  $query = "INSERT INTO customer(name, email, contact, company) VALUES ('$cust_name','$cust_email','$cust_contact','$cust_company')";
			  $result = mysql_query($query);
		  }
		  else
		  {
			echo "Please fill all the fields";
		  }
		  
		  
		 // echo '<div style="width:100%;">
			//<div style="margin-left:35%;margin-right:30%" onclick="popup()" class="classname">Customer added successfully!<br></div></div>';
		}
		
		?>
		
	</body>
</html>
