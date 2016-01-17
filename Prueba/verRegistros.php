<?php
require_once 'gestionBd.php';

$gestion=new gestionBd();
$equiposArray=$gestion->obtenerObj();

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
	<div class=""><h1>Registros de la tabla equipos</h1></div>
</header>

<section>
<article>
			<header>
			<h2>Registros 2010</h2>
			<p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
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
			  		echo "<td>".$equipo->equipo_id."</td>";
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
			
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
</article>

<article>
			<header>
			<h2>Registros 2011</h2>
			<p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
			</header>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
</article>

</section>

<aside>
	<h2>About section</h2>
	<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
</aside>

<footer>
		<p>Copyright 2009 Raseckuat</p>
</footer>

</body>

</html>