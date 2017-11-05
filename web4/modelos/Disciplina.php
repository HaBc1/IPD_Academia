<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Disciplina
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	 
 

	//Implementamos un método para desactivar registros
	public function desactivar($id_coddisciplina)
	{
		$sql="UPDATE disciplina SET estado='0' WHERE id_coddisciplina='$id_coddisciplina'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($id_coddisciplina)
	{
		$sql="UPDATE disciplina SET estado='1' WHERE id_coddisciplina='$id_coddisciplina'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_coddisciplina)
	{
		$sql="SELECT * FROM disciplina WHERE id_coddisciplina='$id_coddisciplina'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT id_coddisciplina, ddescripcion, id_codtipo, fec_creacion, estado FROM disciplina ";
		return ejecutarConsulta($sql);		
	}


	 	public function selectdis()
	{
		$sql="SELECT * FROM disciplina";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros activos
	 	public function selectdiss()
	{
		$sql="SELECT * FROM disciplina";
		return ejecutarConsulta($sql);		
	}

 
}

?>