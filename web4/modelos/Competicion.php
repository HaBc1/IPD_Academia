<?php 
require "../config/Conexion.php";

class Competicion
{
	
	function __construct()
	{
		 
	}

 public function insertar( $nom_competicion, $fec_competicion, $fecha_fin, $ubigeo, $direccion)
	{
 	 $sql="INSERT INTO competicion(nom_competicion, fec_competicion, fecha_fin, ubigeo, direccion)
 	 values ('$nom_competicion', '$fec_competicion', '$fecha_fin','$ubigeo', '$direccion')";
 	 return ejecutarConsulta($sql);	
	 }
	public function editar($id_competicion,$nom_competicion, $fec_competicion, $fecha_fin, $ubigeo, $direccion)
	{
		$sql = "UPDATE `competicion` SET `nom_competicion`='$nom_competicion',`fec_competicion`='$fec_competicion',`fecha_fin`='$fecha_fin',`fec_reg`='$fec_reg',`ubigeo`='$ubigeo',`direccion`='$direccion' WHERE `id_competicion`= '$id_competicion'";
		return ejecutarConsulta($sql);
	}
	public function mostrar($id_competicion)
 	{
 		$sql="SELECT `id_competicion`, `nom_competicion`, `fec_competicion`, `fecha_fin`, `fec_reg`, `ubigeo`, `direccion` FROM `competicion` WHERE id_competicion = '$id_competicion'";
 		return ejecutarConsultaSimpleFila($sql);
	}

	public function listar()
	{
		$sql="SELECT * FROM competicion";
		return ejecutarConsulta($sql);
	}

	 	public function selectC()
	{
		$sql="SELECT * FROM competicion";
		return ejecutarConsulta($sql);		
	}

		public function eliminar()
	{
		$sql="";
		return ejecutarConsulta($sql);
	}

}

 ?>