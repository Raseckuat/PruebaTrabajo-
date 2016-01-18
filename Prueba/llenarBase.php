<?php
require_once 'gestionBd.php';
require_once 'equipos.php'; 

$gestion=new gestionBd();

 $sql ="drop table equipos;create table equipos (
 equipos_id int(10) unsigned NOT NULL AUTO_INCREMENT,
 nombre varchar(50) NOT NULL,
 codigo varchar(50) NOT NULL,
 precio float(10,2) NOT NULL,
 fecha_fab date NOT NULL,
 fecha_in timestamp NOT NULL,
 garantia int(3) NOT NULL,
 PRIMARY KEY (equipos_id)
 );";
 
 $gestion->crearTabla($sql);



/*
 * Llenar BD con 5000 o más registros random
 */
 
 for($i=0;$i<5000;$i++){

 $equipo->setNombre(ramdomNombre());
 $equipo->setCodigo(ramdomCodigo($equipo->getNombre()));
 $equipo->setPrecio(ramdomPrecio());
 $equipo->setFecha_fab(ramdomFechaFab());
 $equipo->setFecha_in(ramdomFechaIn());
 $equipo->setGarantia(ramdomGarantia());
 $gestion->db->insertarBd($equipo);
 
 }
 
 








 



		










