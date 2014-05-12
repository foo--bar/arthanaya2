<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="table.css" />
		<link type="text/css" rel="stylesheet" href="js/jquery.ui.all.css">
			<script src="js/jquery-1.10.2.js"></script>
			<script src="js/jquery.ui.core.js"></script>
			<script src="js/jquery.ui.widget.js"></script>
			<script src="js/jquery.ui.datepicker.js"></script>
			<script src="js/jquery.ui.datepicker.min.js"></script>
			<script src="js/jquery-ui.min.js"></script>
			<link rel="stylesheet" href="js/demos.css">
			<script>
			$(function() {
				$( "#datepicker" ).datepicker({
					changeMonth: true,
					changeYear: true,
			/*We need YYYY-MM-DD format but this script provides MM/DD/YYYY so the need of following line */
					dateFormat: "yy-mm-dd"
				});
			});
			</script>
	</head>
	<body>
	<?php require 'conn.php';	
			$cust_name = mysql_query("SELECT * FROM customer");
			if(!isset($_COOKIE['owner'])) {
				echo "cookie not set!";
				header("Location:index.php");
			}
	?>
		<a href="index.php"><img src = "./logo.png" align = "right" alt="Saubhadra Industries logo"></a>
		<br><br><br><br><br><br><br>
		<div style="width:100%;">
			<div style="margin-left:35%;margin-right:30%">
				<form action="ordersales.php" method="post" class="form">
					M/s :
					<select name="name" class="input" required="required" autofocus="autofocus">
						<option value=""></option>
						<?php
							while($name=mysql_fetch_array($cust_name)){
								$customer=$name['0'];
						?>
						<option style="font-size:40px;"value="<?php echo $customer;?>"><?php echo $customer;?></option>
						<?php }?>
					</select>
					Date: <br><input value="" type="text" required="required" id="datepicker" name="date" class="input">
					<br>
					Description of goods  : <input type="text" required="required" class = "input" name="desc" ><br>
					Quantity  :  <input type="number" required="required" class = "input" name="qty" min="1" /><br>
					Rate  :  <input type="number" required="required" class = "input" name="rate" min="1" step="any"><br><br>
					<input type="submit" class = "classname" value = "Enter and Save"><br><br><br><br>
				</form>
			</div>
		</div>
		
	</body>
</html> 
