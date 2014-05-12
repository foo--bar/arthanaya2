<html>
	<head>
		<title>Saubhadra Industries</title>
		<link rel="stylesheet" type="text/css" href="table.css" />
	</head>
	<body>
		<a href="index.php"><img src = "./logo.png" align = "right" alt="Saubhadra Industries logo"></a>
		<br><br><br><br><br><br><br>		
		
		<?php
		require 'display_table.php';
		include 'conn.php';
		if(!isset($_COOKIE['owner'])) {
			echo "cookie not set!";
			header("Location:index.php");
		}
		if (!$con)
		{
			die('Could not connect: ' . mysqli_connect_error());
		}

		if(isset($_POST['sales_id']))
		{
			$id = $_POST['sales_id'];
			if(!empty($id))
			{
				$query = "UPDATE salesorder SET pending = false WHERE salesorder_id = $id";
				$result = mysql_query($query);
			}
		}
		
		echo '<div class="classname">Pending orders are : </div><br><br>';
		$query = "select * from salesorder where pending = true";
		display_table($con, 'salesorder', $query);
		//display_table($con, '(select * from customer join salesorder)', $query);

		echo '<br>';

		echo '<div class="classname">Completed orders are : </div><br><br>';
		$query = "select * from salesorder where pending = false";
		display_table($con, 'salesorder', $query);

		echo '<br><br>';
		echo '<div><form method="POST" action="showsales.php"';
		echo '<div class="classname">Enter Saler Order Id which are completed : <input type="number" name="sales_id"/><input type="submit" class = "classname" value = "Enter"></div>';
		echo '</form></div>';
		
		
		//mysql_close($con);

		?>
		
	</body>
</html>