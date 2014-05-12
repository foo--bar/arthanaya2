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
			$( "#datepicker_start" ).datepicker({
				changeMonth: true,
				changeYear: true,
		/*We need YYYY-MM-DD format but this script provides MM/DD/YYYY so the need of following line */
				dateFormat: "yy-mm-dd"
			});
			$( "#datepicker_end" ).datepicker({
				changeMonth: true,
				changeYear: true,
		/*We need YYYY-MM-DD format but this script provides MM/DD/YYYY so the need of following line */
				dateFormat: "yy-mm-dd"
			});
		});
		</script>
	</head>
	<body>
		<a href="index.php"><img src = "./logo.png" align = "right" alt="Saubhadra Industries logo"></a>
		<br><br><br><br><br><br><br>
		<div style="width:100%;">
			<div style="margin-left:35%;margin-right:30%">
				<form action="showtax.php" method="post" class="form"><br>
					Start Date: <input value="" required="required" type="text" id="datepicker_start" name="date_start" class="input"><br>
					End Date: <br><input value="" required="required" type="text" id="datepicker_end" name="date_end" class="input"><br><br>
					<input type="submit"  class="classname" value="Submit form">
				</form>
			</div>
		</div>
		
	</body>
	</html> 
	