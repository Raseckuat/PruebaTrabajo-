<?php
require_once 'gestionBd.php';

$gestion=new GestionBd();
$estGen=$gestion->estGenerales();
$equipos_nombre=$gestion->articulosNombre();
$est=$gestion->estadisticas();


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
				    <th># de registros</th>
				    <th>Precio Máximo</th>
				    <th>Precio Mínimo</th>
				    <th>Precio Promedio</th> 
				    <th>Total stock</th>
				  </tr>
				  
				  	<?php 
				  	foreach($estGen as $info){
				  		
				  		echo "<tr>";
				  		echo "<td>".$info->cantidad."</td>";
				  		echo "<td>$".$info->caro."</td>";
				  		echo "<td>$".$info->barato."</td>";
				  		echo "<td>$".$info->ppromedio."</td>";
				  		echo "<td>$".$info->total."</td>";
				  		echo "</tr>";
				  	}
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
					<h3>Articulos en stock</h3>
						</header>
					<table class="table table-striped">
						  <tr>
						    
						    <th>Nombre</th>
						    <th>Cantidad</th> 
						    <th>Más barato</th>
						    <th>Más caro</th> 
						    <th>$ promedio</th>
						    <th>$ stock</th> 
						    
						  </tr>
						  
						  	<?php 
						  	
						  	foreach($equipos_nombre as $equipo){
						  		echo "<tr>";
						  		echo "<td>".$equipo->nombre."</td>";
						  		echo "<td>".$equipo->cantidad."</td>";
						  		echo "<td>".$equipo->barato."</td>";
						  		echo "<td>".$equipo->caro."</td>";
						  		echo "<td>".$equipo->ppromedio."</td>";
						  		echo "<td>".$equipo->total."</td>";
						  		

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
