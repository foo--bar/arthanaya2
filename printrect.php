<!DOCTYPE html>
<html>
	<head>
		
<style type="text/css">
.tax {
	background-color:transparent;
	-webkit-border-top-left-radius:40px;
	-moz-border-radius-topleft:40px;
	border-top-left-radius:40px;
	-webkit-border-top-right-radius:40px;
	-moz-border-radius-topright:40px;
	border-top-right-radius:40px;
	-webkit-border-bottom-right-radius:40px;
	-moz-border-radius-bottomright:40px;
	border-bottom-right-radius:40px;
	-webkit-border-bottom-left-radius:40px;
	-moz-border-radius-bottomleft:40px;
	border-bottom-left-radius:40px;
	text-indent:-1px;
	border:2px solid #0f5096;
	display:inline-block;
	color:#0f5096;
	font-family:Arial;
	font-size:11px;
	font-weight:bold;
	font-style:normal;
	height:34px;
	line-height:30px;
	width:90px;
	text-decoration:none;
	text-align:center;
}.tax:active {
	position:relative;
	top:1px;
}

p {
font-family:Arial;
	font-size:9px;
	font-weight:bold;
	font-style:normal;

}
.classname {
background-color:#0f5096;
-webkit-border-top-left-radius:0;
-moz-border-radius-topleft:0;
border-top-left-radius:0;
-webkit-border-top-right-radius:0;
-moz-border-radius-topright:0;
border-top-right-radius:0;
-webkit-border-bottom-right-radius:0;
-moz-border-radius-bottomright:0;
border-bottom-right-radius:0;
-webkit-border-bottom-left-radius:0;
-moz-border-radius-bottomleft:0;
border-bottom-left-radius:0;
text-indent:0;
border:1px solid #337fed;
display:inline-block;
color:#fff;
font-family:Arial;
font-size:15px;
font-weight:700;
font-style:normal;
height:40px;
line-height:40px;
width:300px;
text-decoration:none;
text-align:center;
}

</style>
	</head>
	<body>
		<div >
			<a href="index.php"><img src = "./logo.png" align = "right" alt="Saubhadra Industries logo"></a>
		</div>
		<br><br>

		<div style="width: 100%;">
			<div style="float: left;">
				<input type="submit" class = "tax" value="TAX INVOICE">

			</div>
			<div style="float: right;width : 80%; color: #0f5096"> 
				<h5><h5 align="right">Mfg. Of: Color Cartons, Corrugated Boxes & Offset Printing<br>OFFICE:Plot No. K-33, MIDC Area, Waluj, Aurangabad - 431136, Phone : 2564131</h5></h5>
			</div>
			<br style="clear: left;" />
		</div>
		<br><br><br>
		<div style="width: 100%;">
			<div style="float: left; width : 33%;color: #0f5096;font-size: 80%"><br>
				<table BORDER=1 CELLPADDING=3 CELLSPACING=1 
				RULES=ROWS FRAME=BOX font-family="Arial">

				<?php
				require 'display_table.php';
				include 'conn.php';
				if(!isset($_COOKIE['owner'])) {
					echo "cookie not set!";
					header("Location:index.php");
				}
				$sales_id = $_POST['sales_id'];


				$query = "select * from salesorder where salesorder_id = $sales_id";
				$result = mysql_query($query);
				$array_order = mysql_fetch_array($result, MYSQLI_ASSOC);

				$cust_id = $array_order['customer_id'];
				$query = "select * from customer where customer_id = $cust_id";
				$result = mysql_query($query);
				if(empty($result)) {
					echo '<div class="classname" >Please enter valid salesorder id</div>';
					die();
				}
				$array_cust = mysql_fetch_array($result, MYSQLI_ASSOC);
				$name = $array_cust['name'];
				echo '<br>';

				//mysqli_close($con);
				?>

					<tr><th>M VAT Inv No.</th><th></th><th>Date</th><th><?php echo $array_order['date']; ?></th></tr>
					<tr><th>M/s.</th><th><?php echo $array_cust['name']; ?></th><th></th><th></th></tr>
				</table>

			</div>
			<div style="float: right;width :45%; color: #0f5096;font-size: 80%"> 
				<table BORDER=1 CELLPADDING=3 CELLSPACING=1 
				RULES=ROWS FRAME=BOX font-family="Arial">
					<tr><th>Challan No.</th><th><?php echo $array_order['salesorder_id']; ?></th>
						<th>Date</th><th><?php echo $array_order['date']; ?></th><th></th></tr>
					<tr><th>P.O. No.</th><th></th><th>Date</th><th><?php echo $array_order['date']; ?></th><th></th></tr>
					<tr><th>VAT TIN NO : 27460029959 V</th><th></th><th></th><th></th><th></th></tr>
					<tr><th>CST TIN NO : 27460029959 C</th><th></th><th></th><th></th><th></th></tr>
				</table>
			</div>
			<br style="clear: left;" />
		</div>
		<br><br><br><br><br><br>
		<div style = "color: #0f5096;font-size: 80%">
			<table BORDER=1 CELLPADDING=3 CELLSPACING=1 
			RULES=COLS FRAME=BOX font-family="Arial" style = "width:100%;">

				<?php $grand_total = $array_order['quantity'] * $array_order['rate']; ?>
				<tr><th>Description of goods</th><th>Quantity</th><th>Rate</th><th>Amount</th></tr>
				<tr><th><?php echo $array_order['description']; ?></th>
					<th><?php echo $array_order['quantity']; ?></th>
					<th><?php echo $array_order['rate']; ?></th>
					<th><?php echo $grand_total; ?></th>
				</tr>

			</table>
		</div>

		<div style = "width:100%;color: #0f5096;font-size: 80%"> 
			<table BORDER=1 CELLPADDING=3 CELLSPACING=1 
			RULES=ROWS FRAME=BOX font-family="Arial" style = "width:100%;fo">
			<col span="2" />
				<tr><th>E & O.E.</th><th></th><th></th><th></th><th></th><th></th><th>Total</th><th><?php echo $grand_total; ?></th></tr>
				<tr><th>Sold Subject to from No.</th><th></th><th></th><th></th><th></th><th></th><th>V.A.T. 5%</th><th><?php echo $grand_total; ?></th></tr>
				<tr><th>Payment</th><th></th><th></th><th></th><th></th><th></th><th>Add/Less for Rounding up</th><th></th></tr>
				<tr><th>Prepared by</th><th></th><th>Checked by</th><th></th><th></th><th></th><th>Grand Total</th><th></th></tr>
			</table>
		</div>
		<h6 align="right" font-family="Arial" style = "color: #0f5096;" ><b>For Saubhadra Industries</h6>
		<div font-family="Arial" style="width: 100%;color: #0f5096;">
			<div style="float: left; width: 33.3%;font-family="Arial"><h6>1) Goods once sold will not be taken back<br><br>2) Interest @ 24% will be charged after due date<br><br>3) Subject to Aurangabad Jurisdiction</h6>
			</div>
			<div style="float: left; width: 38.3%;"><h6 align="justify">"We hereby certify that my/our Registration Certificate under the Maharashtra Value Added Tax Act, 2002 is in force on the date on which the sale of goods specified in this Tax Invoice is made by me/us and that the transaction of sale covered by this tax invoice has been effected by me/us and it shall be accounted for in the turnover of sales while filing of Return and the due tax, if any, payable on the sale has been paid or shall be paid."</h6>
			</div>
			<div style="float: right; width: 17.8%;"><br><br><br><br><br><br><h6>Authorised Signatory/ Partner</h6></div>
			<br style="clear: left;" />
		</div>
	</body>
</html>
