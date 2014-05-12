<html>
<head>

<link rel="stylesheet" type="text/css" href="table.css">
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
if( $_POST )
{

  $date_start = $_POST['date_start'];
  $date_end = $_POST['date_end'];
  $diff = strtotime($date_end) - strtotime($date_start);
  if($diff < 1)
  {
	die("<div class='classname' style='margin-left:35%'>Enter proper dates</div>");
  }
  echo '<div class="classname">Sales orders within dates are : </div><br><br>';


/*Print salesorders */
  $query = "show columns from salesorder";
  $result = mysql_query($query);

  if(!$result)
    echo 'Query did not run! <br>';

  echo '<table style="width=30px" border="1">';
  echo '<tr>';
  while($value = mysql_fetch_array($result))
    echo '<td><b>'.$value[0].'<b></td>';
  echo '</tr>';

  $query = "select * from salesorder where (date) > '$date_start' and (date) < '$date_end'";
  $result = mysql_query($query);

  $sales_total = 0;
  while($value = mysql_fetch_array($result, MYSQLI_NUM))
  {
 //   print_r($value);
    $sales_total += $value[2] * $value[3];
    echo '<tr>';
    foreach($value as $innervalue)
    {
      echo '<td>'.$innervalue.'</td>';
    }
    echo '</tr>';
  }
  echo '</table>';
  echo '<br><div class="classname">Total sales amount to '. $sales_total.'</div>';

  echo '<br><br><br>';


  echo '<div class="classname">Purchase orders within dates are : </div><br><br>';
  $query = "show columns from purchaseorder";
  $result = mysql_query($query);

  if(!$result)
    echo 'Query did not run! <br>';

  echo '<table style="width=30px" border="1">';
  echo '<tr>';
  while($value = mysql_fetch_array($result))
    echo '<td><b>'.$value[0].'<b></td>';
  echo '</tr>';

  $query = "select * from purchaseorder where (date) > '$date_start' and (date) < '$date_end'";
  $result = mysql_query($query);

  $purchase_total = 0;
  while($value = mysql_fetch_array($result, MYSQLI_NUM))
  {
 //   print_r($value);
    $purchase_total += $value[2] * $value[3];
    echo '<tr>';
    foreach($value as $innervalue)
    {
      echo '<td>'.$innervalue.'</td>';
    }
    echo '</tr>';
  }
  echo '</table>';
  echo '<br><div class="classname">Total purchases amount to '. $purchase_total.'</div>';
  
  $tax = ($sales_total - $purchase_total) * 0.05;
  echo '<br><br><div class="classname">Total tax amount to '. $tax.'</div>';

 // mysqli_close($con);
}

echo '<br><br>';


?>
</body>
</html>