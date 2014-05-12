<html>
<head>
	<style type="text/css">
		body {
  background-image:url(./document-background.jpg);
  background-repeat:repeat no-repeat;
  color:#0f5096;
  font-family:Arial;
  font-size:16px;
  line-height:150%;
  margin:0 auto;
  max-width:55em;
  padding:0 2em;
  text-align:justify;
}
h2, h3, h4 {
  color:#0f5096;
}
a:link {
  color:#0f5096;
}
a:visited {
  color:#0f5096;
}

	</style>
</head>

<body>
	<a href="index.php" id="logo"><img src = "./logo.png" align = "right" alt="Saubhadra Industries logo"></a>
	<div class="titlepage" align="left" >
		<div>
			<div>
				<div>
					<h2 class="subtitle">Documentation</h2>
				</div>
				<div>
					<p class="releaseinfo">Release Version 1.0</p>
				</div>
			</div>
			<hr/>
		</div>
		<div>
			<dl>
				<dt>
					<a href="#Preface">Preface</a>
				</dt>
				<dt>
					<span class="chapter">
						<a href="#Overview">1. Overview</a>
					</span>
				</dt>
				<dt>
					<span class="chapter">
						<a href="#Licence">2. Licence</a>
					</span>
				</dt>
				<dt>
					<span class="chapter">
						<a href="#Install">3. Installation/Configuration</a>
					</span>
				</dt>
				<dt>
					<span class="chapter">
						<a href="#Authentication">4. Authentication</a>
					</span>
				</dt>
				<dt>
					<span class="chapter">
						<a href="#Usage">5. Usage</a>
					</span>
					<dd>
						<span>
							<a href="#Customer_1">5.1 Adding Customer</a>
						</span>
					</dd>
					<dd>
						<span>
							<a href="#Customer_2">5.2 Viewing All Customers</a>
						</span>
					</dd>
					<dd>
						<span>
							<a href="#Customer_3">5.3 Creating Sales Order</a>
						</span>
					</dd>
					<dd>
						<span>
							<a href="#Customer_4">5.4 View All Sales Order</a>
						</span>
					</dd>
					<dd>
						<span>
							<a href="#Customer_5">5.5 Creating Purchase Order</a>
						</span>
					</dd>
					<dd>
						<span>
							<a href="#Customer_6">5.6 View all Purchase Order</a>
						</span>
					</dd>
					<dd>
						<span>
							<a href="#Customer_7">5.7 Calculate Tax</a>
						</span>
					</dd>
					<dd>
						<span>
							<a href="#Customer_8">5.8 Print Receipt</a>
						</span>
					</dd>
				</dt>
			</dl>
		</div>
		<hr>
		<div>
			<h3 id="Preface">Preface</h3>
			<p>This application is meant for computerizing the stock management and billing system. It can be handled by any person who knows how to write a bill. The document will take you through the usage of the application. 
			This application is built up using complete knowledge of business transactions. It is built by team Foo-Bar Inc.</p>
			<hr>
			<h3 id="Overview">Overview</h3>
			<p>'Arthanaya' is a easy application to use. The (5.) Usage will take you through the applications better understanding.
			</p>
			<hr>
			<h3 id="Licence">Licence</h3>
			<p>Licenced to Foo_Bar Inc</p>
			<hr>
			<h3 id="Install">Installation/Configuration</h3>
			<p>Requirements:
			XAMPP/WAMP server to start you Apache HTTP server, MySQL server.
			This will help you to setup your localhost(127.0.0.1) and phpMyAdmin.

			You just need to download XAMPP/WAMP server, run the setup.exe file and this will start your server.

			Configuring the database:
			This se.sql file needs to be imported in your /localhost/phpMyAdmin.
			Create a database named 'se' and the .sql file. This will setup your database.
			</p>
			<hr>
			<h3 id="Authentication">Authentication</h3>
			<p>The database can be accessed only with one admin password. Recovery of password can also be done.</p>
			<hr>
			<h3 id="Usage">Usage</h3>
			<p>This guide will take you through basic steps of how to use this application and various linking of pages.</p>
			<h4 id="Customer_1">Adding Customer</h4>
			<p>On clicking this button you will be prompted to Add Customer page where you will fill in the details of customer. On clicking on Save and Enter the customer name will be added to database and will appear while creating sales order.
			</p>
			<br>
			<h4 id="Customer_2">Show All Customer</h4>
			<p>List of all the added customers will be shown here. You can edit the details of customer added.</p>
			<br>
			<h4 id="Customer_3">Create Sales Order</h4>
			<p>Sales order will be created in the name of customer already existing in customer list. You will have to fill out the details of goods, quantity, date of sale, price. On clicking Enter and Save, this entry will be made in the database. Once a order is created, it's initial status will be pending.
			</p>
			<br>
			<h4 id="Customer_4">View All Sales Order</h4>
			<p>All the sales order created will be visible here. Sales Order completed and pending are appropriately shown here. By providing sales_order_id in text box given below you can change the status of pending orders to completed order. </p>
			<br>
			<h4 id="Customer_5">Create Purchase Order</h4>
			<p>Purchase order will be created in the name of supplier already existing. All the purchase details will be filled in here.</p>
			<br>
			<h4 id="Customer_6">View All Purchase Order</h4>
			<p>All the purchases made will appear under this link</p>
			<br>
			<h4 id="Customer_7">Calculate Tax</h4>
			<p>You will have to provide a period for which you want to calculate tax. Tax percent can be manipulated</p>
			<br>
			<h4 id="Customer_8">Print Receipt</h4>
			<p>To print a receipt for a sales order you will need to have sales_order_id which you can view in View All Sales Order. On submitting sales_order_id receipt GUI will be filled appropriately. You can print this receipt.</p>
			<br>
			<hr>
		</div>
	</div>
 <a href="#logo">TOP</a>
 
</body>
