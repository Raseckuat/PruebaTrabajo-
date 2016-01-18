<?php
require_once 'gestionBd.php';

$gestion=new gestionBd();
$est=$gestion->estadisticas();
$equipos_nombre=$gestion->articulosNombre();


?>

<!DOCTYPE HTML>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<meta http-equiv="Content-Type" content="text/html; ISO-8859-1" />


<title>Prueba</title>
</head>

<body class="container">
<header>
	<div class=""><h1>Estadisticas de la tabla equipos</h1></div>
</header>

<section>
<article class="container">
			<header>
			<h3>Estadisticas de precios</h3>
			</header>
				
				<table class="table table-striped">
				  <tr>
				    <th>Numero de registros</th>
				    <th>Precio Máximo</th>
				    <th>Precio Mínimo</th>
				    <th>Precio Promedio</th> 
				    <th>Total $ en stock</th>
				  </tr>
				  
				  	<?php 
				  		echo "<tr>";
				  		echo "<td>".$est["num_reg"]."</td>";
				  		echo "<td>$".$est["max"]."</td>";
				  		echo "<td>$".$est["min"]."</td>";
				  		echo "<td>$".$est["avg"]."</td>";
				  		echo "<td>$".$est["sum"]."</td>";
				  		echo "</tr>";
				  		
				  	?>
				   
				</table>
</article>
<article class="container" >
				<header>
				<h3>Articulos en rangos de precios</h3>
					</header>
				<table class="table table-striped">
					  <tr>
					    <th># Articulos $50 a $100</th>
					    <th>Precio promedio</th>
					    <th># Articulos $100 a $150</th>
					    <th>Precio promedio</th>
					    <th># Articulos $150 a $200</th>
					    <th>Precio promedio</th> 
					  </tr>
					  
					  <?php 
				  		echo "<tr>";
				  		echo "<td>".$est["r1"]."</td>";
				  		echo "<td>$".$est["prom_r1"]."</td>";
				  		echo "<td>$".$est["r2"]."</td>";
				  		echo "<td>$".$est["prom_r2"]."</td>";
				  		echo "<td>$".$est["r3"]."</td>";
				  		echo "<td>$".$est["prom_r3"]."</td>";
				  		echo "</tr>";
				  		
				  	?>
					  	  
					</table>
</article>
<article class="container">
						<header>
					<h3>Cantidad de articulos por año de ingreso</h3>
						</header>
					<table class="table table-striped">
					  <tr>
					    <th>2013</th>
					    <th>2014</th>
					    <th>2015</th>
					    <th>2016</th>
					    
					  </tr>
					  
					  <?php 
				  		echo "<tr>";
				  		echo "<td>".$est["anio1"]."</td>";
				  		echo "<td>".$est["anio2"]."</td>";
				  		echo "<td>".$est["anio3"]."</td>";
				  		echo "<td>".$est["anio4"]."</td>";
				  		
				  		echo "</tr>";
				  		
				  	?>
					  	  
					</table>
					
</article>
<article class="container">			
						<header>		
					<h3>Cantidad de articulos en stock mayores a 200 articulos</h3>
						</header>
					<table class="table table-striped">
						  <tr>
						    
						    <th>Nombre</th>
						    <th>Cantidad Stock</th> 
						    
						  </tr>
						  
						  	<?php 
						  	
						  	foreach($equipos_nombre as $equipo){
						  		echo "<tr>";
						  		echo "<td>".$equipo->nombre."</td>";
						  		echo "<td>".$equipo->cantidad."</td>";

						  		echo "</tr>";
						  		
						  	}
						  	?>
			    
			  
					</table>
					
			
		
				
			
</article>


</section>


<footer>
		<p>Copyright 2016 Raseckuat</p>
</footer>

</body>

</html>