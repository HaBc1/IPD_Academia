<?php 
require "../config/Conexion.php";

 
 class Persona 
 {
 	
 	function __construct()
 	{
 		
 	}
 	 public function insertar($id_persona, $vapepaterno, $vapematerno, $vnombres, $dnipersona,$sexo, $estadocivil, $fec_nacimiento,$email)
	{
 	 $sql="INSERT INTO persona(vapepaterno, vapematerno, vnombres,dnipersona ,sexo, estadocivil,fec_nacimiento,email)
 	 values ('$vapepaterno', '$vapematerno', '$vnombres', '$sexo','$estadocivil', '$fec_nacimiento','$email')";
 	 return ejecutarConsulta($sql);	
	 }

	 public function editar($id_persona, $vapepaterno, $vapematerno, $vnombres, $sexo, $dnipersona,$estadocivil, $fec_nacimiento,$email)
	 {
	 	$sql = "UPDATE persona SET vapepaterno='$vapepaterno',vapematerno='$vapematerno',vnombres='$vnombres',dnipersona='$dnipersona',estadocivil='$estadocivil',fec_nacimiento='$fec_nacimiento',email='$email' WHERE id_persona = '$id_persona'";
	 	return ejecutarConsulta($sql);
	 }

 	public function mostrar($id_persona)
 	{
 	$sql="SELECT*FROM persona  WHERE id_persona='$id_persona'";
 	return ejecutarConsultaSimpleFila($sql);
	}

	public function listar()
	{
	$sql="SELECT  * FROM persona ";
	return ejecutarConsulta($sql);
	}

 
public function listarP()
	{
		$sql="SELECT * FROM persona";
		return ejecutarConsulta($sql);		
	}

public function listarB()
	{
		$sql="SELECT * FROM persona";
		return ejecutarConsulta($sql);		
	}

 }
 ?>


