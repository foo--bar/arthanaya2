<?php

echo '<!DOCTYPE html>';

if(isset($_COOKIE['owner'])) {
	echo "cookie set";
	header("Location:new_index.php");
}

echo '<html>
	<head>
		<title>Saubhadra Industries</title>
		<link rel="stylesheet" type="text/css" href="table.css" />
	</head>
	<body>
		<a href="index.php"><img src = "./logo.png" align = "right" alt="Saubhadra Industries logo"></a>
		<br><br><br><br><br><br><br>
		<div style="width:100%;">
			<div style="margin-left:35%;margin-right:30%">';
			
				echo '<form method="POST" action="login.php" align="center">
					<input type="password" name="val" style="height:40px;line-height:40px;width:300px;" placeholder="Password" autofocus="autofocus"/><br><br>';
					if(isset($_GET['err'])){
						echo "<div style='color:red'>Enter Valid password!<br><br></div>";
					}
					echo '<input type="submit" class="classname" value="Enter"/>
				</form>
			</div>
		</div>
	</body>
</html>';
?>