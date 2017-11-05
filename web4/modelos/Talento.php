<?php 
require "../config/Conexion.php";

 
 class Talento 
 {
 	
 	function __construct()
 	{
 		
 	}
 	 public function insertar( $id_inscripcion, $id_disciplina)
	{
 	 $sql="INSERT INTO talento(id_inscripcion, id_disciplina)
 	 values ('$id_inscripcion', '$id_disciplina')";
 	 return ejecutarConsulta($sql);	
	 }

	 public function editar($id_talento, $id_inscripcion, $id_disciplina)
	 {
	 	$sql = "UPDATE talento SET vapepaterno='$vapepaterno',vapematerno='$vapematerno',vnombres='$vnombres',dnipersona='$dnipersona',estadocivil='$estadocivil',fec_nacimiento='$fec_nacimiento',email='$email' WHERE id_persona = '$id_persona'";
	 	return ejecutarConsulta($sql);
	 }

 	public function mostrar($id_talento)
 	{
 	$sql="SELECT*FROM talento  WHERE id_talento='$id_talento'";
 	return ejecutarConsultaSimpleFila($sql);
	}

	public function listar()
	{
	$sql="SELECT  * FROM talento ";
	return ejecutarConsulta($sql);
	}

 
public function listarP()
	{
		$sql="SELECT * FROM talento";
		return ejecutarConsulta($sql);		
	}

public function listarB()
	{
		$sql="SELECT * FROM talento";
		return ejecutarConsulta($sql);		
	}

 }
 ?>


