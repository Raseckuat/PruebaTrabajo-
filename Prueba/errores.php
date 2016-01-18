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

	public function obtenerObj($sql){
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

	public function obtenerReg(){
		return $this->obtenerObj("SELECT * from equipos limit 100"); //traemos 1000 registros
	}

	public function articulosNombre(){
		return ($this->obtenerObj("select nombre, count(*) as cantidad,min(precio) as barato, max(precio) as caro,avg(precio) as ppromedio, sum(precio) as total from equipos group by nombre "));
	}

	public function estGenerales(){
		return ($this->obtenerObj("select count(*) as cantidad,min(precio) as barato, max(precio) as caro,avg(precio) as ppromedio, sum(precio) as total from equipos;"));
	}

	public function estPrecios(){
		$rango[0]=$this->obtenerObj("select count(*) as cantidad, avg(precio) as ppromedio from equipos where precio between 50 and 100;");
		$rango[1]=$this->obtenerObj("select count(*) as cantidad, avg(precio) as ppromedio from equipos where precio between 100 and 150;");
		$rango[2]=$this->obtenerObj("select count(*) as cantidad, avg(precio) as ppromedio from equipos where precio between 150 and 200;");
		var_dump($rango);

		return $rango;
	}

	public function estFechas(){

		$anio[0]=$this->obtenerObj("select count(*) as cantidad, avg(precio) as ppromedio from equipos where fecha_in between '2013-01-01' and '2013-12-31';");
		$anio[1]=$this->obtenerObj("select count(*) as cantidad, avg(precio) as ppromedio from equipos where fecha_in between '2014-01-01' and '2014-12-31';");
		$anio[2]=$this->obtenerObj("select count(*) as cantidad, avg(precio) as ppromedio from equipos where fecha_in between '2015-01-01' and '2015-12-31';");
		$anio[3]=$this->obtenerObj("select count(*) as cantidad, avg(precio) as ppromedio from equipos where fecha_in between '2016-01-01' and '2016-12-31';");


		return $anio;
	}
	public function consultarBd($sql){
		$result = $this->db->query($sql);
		$row = $result->fetch_row();
		//echo '#: ', $row[0];
		return $row[0];


	}

	public function crearBd($sql){
		if ($this->db->query($sql) === TRUE) {
			echo "Base de datos creada exitosamente";

		} else {

			echo "<br>Fallo:no se ha creado la base <br> ".$this->error;

		}
			
	}

}





