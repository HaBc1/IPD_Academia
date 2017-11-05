<?php 
require "../config/Conexion.php";

class Especialista
{
	
	function __construct()
	{
		 
	}

	public function insertar($id_persona,$telefono,$direccion)
	{
			$sql = "INSERT INTO `especialista`(`id_persona`, `telefono`, `direccion`) VALUES ('$id_persona','$telefono','$direccion')";
			return ejecutarConsulta($sql);
	}
	public function editar($id_especialista,$id_persona,$telefono,$direccion)
	{
		$sql = "UPDATE `especialista` SET `id_persona`= '$id_persona',`telefono`= '$telefono', `direccion`= '$direccion' WHERE `id_especialista`= '$id_especialista' ";
		return ejecutarConsulta($sql);
	}
	public function mostrar($id_especialista)
 	{
 		$sql="SELECT * FROM especialista where id_especialista = '$id_especialista' ";
 		return ejecutarConsultaSimpleFila($sql);
	}
 

	public function listar()
	{
		$sql="SELECT e.id_especialista ,p.dnipersona as 'DNI', CONCAT(p.vapepaterno , ' ' , p.vapematerno , ' ' , p.vnombres) as 'Especialista', e.telefono as 'Telefono', e.direccion as 'Direccion', e.fec_creacion as 'Fec_Creacion' FROM especialista e INNER JOIN persona p ON p.id_persona = e.id_persona";
		return ejecutarConsulta($sql);
	}

	 	public function select()
	{
		$sql="SELECT * from persona";
		return ejecutarConsulta($sql);		
	}

	 	public function selecte()
	{
		$sql="SELECT es.id_especialista, es.id_persona, es.telefono, es.direccion, es.fec_creacion , CONCAT(e.vapepaterno , ' ' , e.vapematerno , ' ' , e.vnombres) as especialistas FROM especialista es INNER JOIN persona e on e.id_persona = es.id_persona";
		return ejecutarConsulta($sql);		
	}
	
	 public function selectesp()
	 {
	 	$sql="SELECT es.id_especialista, es.id_persona, es.telefono, es.direccion, es.fec_creacion , CONCAT(e.vapepaterno , ' ' , e.vapematerno , ' ' , e.vnombres) as 'especialistas' FROM especialista es INNER JOIN persona e on e.id_persona = es.id_persona";
	 	return ejecutarConsulta($sql);		
	 }		


}

 ?>