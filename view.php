<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vista de Resultados</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body>
	<div class="jumbotron-hr">


		<h1 class="h1 text-center">Tabla de Pedidos con While</h1>

	

	</div>

	<div class="container">
	<table class="table table-inverse">
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>#Order</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>

	<?php 
			while ($arrayOrders=mysqli_fetch_assoc($orders))
			{
 			echo "<tr>";
			echo "<td>".$arrayOrders["id"]."</td>";
			echo "<td>".$arrayOrders["first_name"]."</td>";
			echo "<td>".$arrayOrders["last_name"]."</td>";
			echo "<td>".$arrayOrders["email"]."</td>";
			echo "<td>".$arrayOrders["num_order"]."</td>";
			echo "<td>".$arrayOrders["total"]."</td>";
			echo "</tr>";
 			// echo "<tr>";
 			// 	foreach ($arrayOrders as $key => $value) {
 			// 	echo "<td>".$value."</td>";
			}
 			
  ?>
		</tbody>
	</table>
	</div>	
</body>
</html>