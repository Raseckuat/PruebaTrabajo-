<?php
 require_once("configuracion.php");
 
 class Conexion extends mysqli{
	
 	 public function __construct(){
		 parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		 $this->query("SET NAMES 'utf-8';");
		 $this->connect_errno ? die ('Error con la conexión') : $x= 'Conectado';
		 echo $x; 
		 unset($x);
	 }
	 	 
	 	 
 } //Fin de la clase
	 
	 
	 
?>
