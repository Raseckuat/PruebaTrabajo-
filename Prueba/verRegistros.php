<?php
require_once 'gestionBd.php';

$gestion=new GestionBd();
$equiposArray=$gestion->obtenerReg();

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
<meta http-equiv="Content-Type" content="text/html" />
<meta accept-charset="UTF-8">


<title>Prueba</title>
</head>

<body class="container">
<header>
	<div class=""><h1>Registros de la tabla equipos</h1></div>
</header>

<section>
<article>
			<header>
			<h2>Mostar Registros (solo 100) </h2>
			
			</header>
			
			<table class="table table-striped">
			  <tr>
			    <th>id</th>
			    <th>Nombre</th>
			    <th>Codigo</th> 
			    <th>Precio</th>
			    <th>Fecha Fabricación</th>
			    <th>Fecha Ingreso</th>
			    <th>Garantia</th>
			  </tr>
			  
			  	<?php 
			  	foreach($equiposArray as $equipo){
			  		
			  		echo "<tr>";
			  		echo "<td>".$equipo->equipos_id."</td>";
			  		echo "<td>".$equipo->nombre."</td>";
			  		echo "<td>".$equipo->codigo."</td>";
			  		echo "<td>".$equipo->precio."</td>";
			  		echo "<td>".$equipo->fecha_fab."</td>";
			  		echo "<td>".$equipo->fecha_in."</td>";
			  		echo "<td>".$equipo->garantia."</td>";
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
