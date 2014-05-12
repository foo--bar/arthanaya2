<html>
	<head>
		<link rel="stylesheet" type="text/css" href="table.css">
		<script type="text/javascript">
			function popup(){
				alert('Sales Order Added Successfully');
				window.location="index.php";
			}
		</script>
	</head>
	<body onload="popup()">
		<a href="index.php"><img src = "./logo.png" align = "right" alt="Saubhadra Industries logo"></a>
		<br><br><br><br><br><br><br>
		<?php
			require 'display_table.php';
			require 'conn.php';

			if(!isset($_COOKIE['owner'])) {
				echo "cookie not set!";
				header("Location:index.php");
			}
			if($_POST)
			{
				$cust_name = $_POST['name'];
				$desc = $_POST['desc'];
				$order_date = $_POST['date'];
				$qty = $_POST['qty'];
				$rate = $_POST['rate'];
				
				$cust_id = mysql_query("SELECT * FROM customer WHERE name=\"$cust_name\" ");
				$cust_row_id = mysql_fetch_row($cust_id);
				$id=$cust_row_id["4"];
				if(empty($id) || empty($desc) || empty ($order_date) || empty($rate) || empty($qty))
					die('Some fields are empty');
				else
				{
					$query = "INSERT INTO salesorder(customer_id, date, description, quantity, rate, pending)
					VALUES ('$id','$order_date','$desc','$qty', '$rate', true)";
					if(!mysql_query($query))
						die('Input fields incorrectly filled <br> Check if customer_id exists!');
				}
			}
	/*
		echo 'Pending orders are : <br>';
		$query = "select * from salesorder where pending = true";
		display_table($con, 'salesorder', $query);

		echo '<br>';

		echo 'Completed orders are : <br>';
		$query = "select * from salesorder where pending = false";
		display_table($con, 'salesorder', $query);
	*/
			//mysql_close($con);
			//echo 'Sales order added successfully!<br>';
		?>
		
	</body>
</html>
