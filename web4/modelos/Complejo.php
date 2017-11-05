<?php 
require "../config/Conexion.php";

class Complejo
{
	
	function __construct()
	{
		 
	}

	public function insertar($descripcioncomplejo,$ubigeo,$direccion,$telefono)
	{
			$sql = "INSERT INTO `complejo`(`descripcioncomplejo`, `ubigeo`, `direccion`, `telefono`) VALUES ('$descripcioncomplejo','$ubigeo','$direccion','$telefono')";
			return ejecutarConsulta($sql);
	}
	public function editar($id_complejo,$descripcioncomplejo,$ubigeo,$direccion,$telefono)
	{
		$sql = "UPDATE `complejo` SET `descripcioncomplejo`= '$descripcioncomplejo',`ubigeo`= '$ubigeo',`direccion`= '$direccion',`telefono`= '$telefono' WHERE `id_complejo`= '$id_complejo'";
		return ejecutarConsulta($sql);
	}
	public function mostrar($id_complejo)
 	{
 		$sql="SELECT * FROM `complejo` WHERE id_complejo = '$id_complejo'";
 		return ejecutarConsultaSimpleFila($sql);
	}
 

	public function listar()
	{
		$sql="SELECT id_complejo ,descripcioncomplejo as Complejo, ubigeo as Ubigeo, direccion as Direccion, telefono as Telefono FROM `complejo`";
		return ejecutarConsulta($sql);
	}

	 	public function selectC()
	{
		$sql="SELECT * FROM complejo";
		return ejecutarConsulta($sql);		
	}

		public function eliminar()
	{
		$sql="DELETE FROM complejo WHERE id_complejo = '$id_complejo'";
		return ejecutarConsulta($sql);
	}

}

 ?>