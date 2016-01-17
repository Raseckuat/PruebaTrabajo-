<?php

 class Equipo {
 	
 	private $equipos_id;
 	private $nombre; 
 	private $codigo; 
 	private $precio;
 	private $fecha_fab;
 	private $fecha_in;
 	private $garantia;
 	
 	
 	public function __construct(){
 		$this->equipos_id;
 		$this->nombre;
 		$this->codigo;
 		$this->precio;
 		$this->fecha_in;
 		$this->fecha_fab;
 		$this->garantia;
 		 		
 	}
 	
   
 	public function __destruct(){
 		unset($this->equipos_id);
 		unset($this->nombre);
 		unset($this->codigo);
 		unset($this->precio);
 		unset($this->fecha_in);
 		unset($this->fecha_fab);
 		unset($this->garantia);
 			
 	}

 	public function getEquipo_id()
 	{
 		return $this->nombre;
 	}
 	
 	public function setEquipo_id($value)
 	{
 		$this->nombre = $value;
 	}
 
 	public function getNombre()
 	{
 		return $this->nombre;
 	}
 	
 	public function setNombre($value)
 	{
 		$this->nombre = $value;
 	}
 	
 	public function getCodigo()
 	{
 		return $this->codigo;
 	}
 	
 	public function setCodigo($value)
 	{
 		$this->codigo = $value;
 	}
 	
 
 	public function getPrecio()
 	{
 		return $this->precio;
 	}
 	
 	public function setPrecio($value)
 	{
 		$this->precio = $value;
 	}
 	
 
 	
 	public function getFecha_in()
 	{
 		return $this->fecha_in;
 	}
 	
 	public function setFecha_in($value)
 	{
 		$this->fecha_in = $value;
 	}
 	
 	
 	
 	public function getFecha_fab()
 	{
 		return $this->fecha_fab;
 	}
 	
 	public function setFecha_fab($value)
 	{
 		$this->fecha_fab = $value;
 	}
 	 

	
	public function getGarantia() 
	{
	  return $this->garantia;
	}
	
	public function setGarantia($value) 
	{
	  $this->garantia = $value;
	}
	    
	
    
    
 	
 	
 	
 	
 }
 

 
 
 
 
 
