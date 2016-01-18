<?php

  function numAleatorio($min, $max){
 		return mt_rand($min,$max);
 	}
 	
 	
 	  function ramdomNombre(){
 		$nomEqui=array("Computadora","Arduino Uno",
 				"RaspBerry B","RaspBerry A",
 				"RaspBerry B+","RaspBerry A+",
 				"Arduino nano","Arduino mega",
 				"Onion Mega","Arduino PCDuino",
 				"Arduino Uno V R4","Arduino Uno V R5",
 				"Panel Solar A","Panel Solar B+",
 				"Regulador 500w","Regualador 900W",
 				"Sensor Ultrasonico","Sensor de Presión",
 				"Electro Valvula C","Electro Compresor",
 				"Arduino Uno V R1","Arduino Uno V R2",
 				"Arduino Uno V R3", "Arduino chipset");
 	
 		return $nomEqui[mt_rand(0,23)];
 	
 	}
 	
 	  function ramdomCodigo($nomEquipo){
 		$codigo ="";
 		$pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 		$max = strlen($pattern)-1;
 		$longuitud=14;
 		for($i=0;$i < $longuitud;$i++) $codigo .= $pattern{mt_rand(0,$max)};
 		//echo(var_dump(substr($nomEquipo,0,4)));
 		return (substr($nomEquipo,0,4).$codigo);
 			
 	}
 	  function ramdomPrecio(){
 		
 	  	return (50+(mt_rand(1,1000)/1000)*150);
 	}
 	
 	  
 	  function ramdomFechaIn(){
 		return ramdomFecha("2013-01-01 00:00:00","2016-01-15 10:50:00",'Y-m-d H:i:s');
 	}
 	
 	  function ramdomFechaFab(){
 		return ramdomFecha("2007-01-01","2015-12-01",'Y-m-d');
 	}
 	
 	  function ramdomGarantia(){
		//De uno a cuatro años de garantia.  	  
 		return mt_rand(1,4); 
 	}

 	function ramdomFecha($sStartDate, $sEndDate, $sFormat){
 		$fMin = strtotime($sStartDate);
 		//var_dump(strtotime($sStartDate));
 		$fMax = strtotime($sEndDate);
 		//var_dump(strtotime($sEndDate));
 		$fVal = mt_rand($fMin, $fMax);
 		return date($sFormat, $fVal);
 	}
