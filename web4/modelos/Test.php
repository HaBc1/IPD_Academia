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
		$sql="SELECT t.id_test, t.descripcion_test,CONCAT(p2.vapepaterno, ' ', p2.vapepaterno, ' ', p2.vnombres) as 'Especialista', t.resultado ,CONCAT(p1.vapepaterno, ' ', p1.vapepaterno, ' ', p1.vnombres) as 'Beneficiario', t.fecha_registro FROM test t
INNER JOIN inscripcion i ON i.id_inscripcion = t.id_inscripcion
INNER JOIN persona p1 ON p1.id_persona = i.id_beneficiario
INNER JOIN especialista e ON e.id_especialista = t.id_especialista
INNER JOIN persona p2 ON p2.id_persona = e.id_persona";
		return ejecutarConsulta($sql);
	}
	 

}

 ?>