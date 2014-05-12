<?php
echo '<html>
<head>
	<link rel="stylesheet" type="text/css" href="table.css" />
</head>
<body>
	<a href="index.php"><img src = "./logo.png" align = "right" alt="Saubhadra Industries logo"></a>
		<br><br><br><br><br><br><br>
	<div style="margin-left:35%;margin-right:30%;width:100%;">';
	echo '<form  class="form" action="printrect.php" align="center" method="POST">
			Enter sales order ID : <input type="text" name="sales_id" autofocus="autofocus"> </input> <br>';
			 if(isset($_GET['err'])){
						echo "<div style='color:red'>Enter Valid password!<br><br></div>";
					}
			
			echo '<input type="submit" value="Submit"></input>
		</form>
	</div>
	
</body>
</html>';
?>