<?php
function display_table($con, $tablename, $givenquery)
{
	$query = "show columns from $tablename";
	$result = mysql_query($query);
	if (!$result) 
		echo 'Query did not run! <br />';
	echo '<table style="width=30px" border="1">';
		echo '<tr>';
		while ($value = mysql_fetch_array($result)) 
			echo '<td style="background-color:#0f5096;color:#ffffff;"><b>' . $value[0] . '<b></td>';
		echo '</tr>';
		$query = ($givenquery == "") ? "select * from $tablename" : $givenquery;
		$result = mysql_query( $query);
		if (!$result) 
			echo 'Second query did not run! <br />';
		while ($value = mysql_fetch_array($result, MYSQLI_NUM))
		{
			echo '<tr>';
			foreach($value as $innervalue)
			{
				echo '<td>' . $innervalue . '</td>';
			}
			echo '</tr>';
		}
	echo '</table>';
}
?>
