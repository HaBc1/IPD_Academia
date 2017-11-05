<?php 
require "../config/Conexion.php";

class Horario
{
	
	function __construct()
	{
		 
	}

	public function insertar($id_complejo,$id_coddisciplina,$dia,$hora_inicio,$hora_fin)
	{
			$sql = "INSERT INTO `horario`(`id_complejo`, `id_coddisciplina`, `dia`, `hora_inicio`, `hora_fin`) VALUES ('$id_complejo','$id_coddisciplina','$dia','$hora_inicio','$hora_fin')";
			return ejecutarConsulta($sql);
	}
	public function editar($id_horario,$id_complejo,$id_coddisciplina,$dia, $hora_inicio,$hora_fin)
	{
		$sql = "UPDATE `horario` SET `id_complejo`= '$id_complejo',`id_coddisciplina`= '$id_coddisciplina',`dia`= '$dia',`hora_inicio`= '$hora_inicio',`hora_fin`= '$hora_fin' WHERE `id_horario`= '$id_horario'";
		return ejecutarConsulta($sql);
	}
	public function mostrar($id_horario)
 	{
 		$sql= "SELECT * FROM horario where id_horario = '$id_horario'";
 		return ejecutarConsultaSimpleFila($sql);
	}

	public function listar()
	{
		$sql= "select * from horario";
		return ejecutarConsulta($sql);
	}

	 	public function select()
	{
		$sql= "SELECT * FROM horario";
		return ejecutarConsulta($sql);		
	}



}

 ?>