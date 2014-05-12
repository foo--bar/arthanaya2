<html>
	<head>
		<link rel="stylesheet" type="text/css" href="table.css">
	</head>
	<body>
		<a href="index.php"><img src = "./logo.png" align = "right" alt="Saubhadra Industries logo"></a>
		<br><br><br><br><br><br><br>
		

		<?php
		require 'conn.php';
		require 'display_table.php';
		if(!isset($_COOKIE['owner'])) {
				echo "cookie not set!";
				header("Location:index.php");
			}
		display_table($con, 'purchaseorder', "");

		//mysqli_close($con);
		//echo '<a href="index.html">Back</a>';
		?>
		
			
	</body>
</html>