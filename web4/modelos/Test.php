<?php 
require "../config/Conexion.php";

class Test
{
	
	function __construct()
	{
		 
	}

	public function insertar($descripcion_test, $id_inscripcion, $id_especialista, $resultado)
	{
			$sql = "INSERT INTO test(descripcion_test, id_inscripcion, id_especialista,resultado) VALUES ('$descripcion_test','$id_inscripcion','$id_especialista', '$resultado')";
			return ejecutarConsulta($sql);
	}
	public function editar($id_test, $descripcion_test, $id_inscripcion, $id_especialista, $resultado)
	{
		$sql = "UPDATE test SET descripcion_test= '$descripcion_test',id_inscripcion= '$id_inscripcion',id_especialista= '$id_especialista',resultado= '$resultado' WHERE id_testw= '$id_test'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($id_test)
 	{
 		$sql="SELECT * FROM test where id_test = '$id_test' ";
 		return ejecutarConsultaSimpleFila($sql);
	}
 

	public function listar()
	{
		$sql="SELECT t.id_test, t.descripcion_test, t.id_inscripcion, t.id_especialista, t.resultado, t.fecha_registro , i.id_beneficiario , e.id_especialista FROM test t   INNER JOIN inscripcion i on i.id_inscripcion = t.id_inscripcion INNER JOIN especialista e on e.id_especialista = t.id_especialista";
		return ejecutarConsulta($sql);
	}
	 

}

 ?>