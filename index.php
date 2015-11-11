<!DOCTYPE HTML>
<html>
	<head>
		<title>Hermes Fridge Display</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h1>Hermes Fridge Display</h1>
			</div>
			<div class="page-content">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Product Name</th>
							<th>Product Barcode</th>
						</tr>
					</thead>
					<tbody>
						<?php
							
							//include connection
							include 'connection.php';
						
							//get all products from DB
							$getProducts = mysqli_query($link, "SELECT * from products");
							
							//list all products
							while($product = $getProducts->fetch_array()){
								
								//echo row
								echo '<tr>';
									echo '<td>'.$product['ID'].'</td>';
									echo '<td>'.$product['PRODUCT_NAME'].'</td>';
									echo '<td>'.$product['PRODUCT_BARCODE'].'</td>';
								echo '</tr>';
							}
						
						?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>