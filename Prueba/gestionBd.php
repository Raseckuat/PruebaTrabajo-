<?php
require_once 'conexion.php';
require_once 'equipos.php';
require_once 'ramdom.php';

class gestionBd{
	
	private $db;
	private $equipo;
	
	public function __construct(){
		$this->db=new Conexion();
		$this->equipo=new Equipo();
	}
	
	
	//Guardar nuevos datos en la base de datos
	public function insertarBd($equipo){
		$sql="INSERT INTO equipos (nombre,codigo,precio,fecha_in,fecha_fab,garantia) VALUES ('".$equipo->getNombre()."','".$equipo->getCodigo()."',".$equipo->getPrecio().",'".$equipo->getFecha_in()."','".$equipo->getFecha_fab()."',".$equipo->getGarantia().");";
		if($this->db->query($sql) === TRUE){
			//echo "Equipo insertado <br>";
		 	
		}else{
			echo "Fallo: equipo no insertado. ".$db->error;
		 	
		}
	
	}
	 
	public function obtenerObj(){
		$sql="SELECT * from equipos limit 1000"; //traemos 1000 registros
		$result = $this->db->query($sql); //usamos la conexion para dar un resultado a la variable
		$equipos=array();
		if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
		{
			while ($obj= mysqli_fetch_object($result))
			{
				$equipos[]=$obj;
			}
			mysqli_free_result($result);
		}
		else
		{
			echo "No hubo resultados";
		}
		return $equipos;
	
	}
	
	public function consultarBd($sql){
		$result = $this->db->query($sql);
		$row = $result->fetch_row();
		echo '#: ', $row[0];
	
	}
	
	public function crearBd($sql){
		if ($this->db->query($sql) === TRUE) {
			echo "Base de datos creada exitosamente";
	
		} else {
	
			echo "<br>Fallo:no se ha creado la base <br> ".$this->error;
	
		}
			
	}
	
}





/*
 * Consultas estadisticas con la base de datos...
 */

/*
$db->consultarBd("select count(*) from equipos where precio=100.00;");
$db->consultarBd("select max(precio) from equipos where precio>=100 && precio<=200;");
$db->consultarBd("select max(precio) from equipos where precio between 100 and 200;");
$db->consultarBd("select avg(precio) from equipos;");
$db->consultarBd("select count(*) from equipos where nombre like '%Arduino%';");
$db->consultarBd("select count(*) from equipos where fecha_fab>='2013-01-01' && fecha_fab<='2014-01-01';");
$db->consultarBd("select count(*) from equipos where fecha_fab between '2013-01-01' and '2014-01-01';");
$db->consultarBd("select min(precio) from equipos;");
$db->consultarBd("select sum(precio) from equipos where precio=0.2;");
*/



/*
 * Estructura de la tabla equipos 
 */
/*
 * 
    $tabla="drop table equipos;create table equipos (
 	equipos_id int(10) unsigned NOT NULL AUTO_INCREMENT,
 	nombre varchar(50) NOT NULL,
 	codigo varchar(50) NOT NULL,
 	precio float(10,2) NOT NULL,
 	fecha_fab date NOT NULL,
 	fecha_in timestamp NOT NULL,
 	garantia int(3) NOT NULL,
 	PRIMARY KEY (equipos_id)
 	);";
 	
 */


 /*
  * Llenar BD con 5000 o más registros random
  */

/*
  for($i=0;$i<5000;$i++){
	
	$equipo->setNombre(ramdomNombre());
	$equipo->setCodigo(ramdomCodigo($equipo->getNombre()));
	$equipo->setPrecio(ramdomPrecio());
	$equipo->setFecha_fab(ramdomFechaFab());
	$equipo->setFecha_in(ramdomFechaIn());
	$equipo->setGarantia(ramdomGarantia());
	$db->insertarBd($equipo);
	}

*/
  
 



		










