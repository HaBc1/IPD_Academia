<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Inscripcion
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($id_apoderado,$telefono,$direccion,$id_beneficiario,$btalla,$bpeso,$imagen)
	{
		$sql="INSERT INTO inscripcion (id_apoderado,telefono,direccion,id_beneficiario,btalla,bpeso,imagen)
		VALUES ('$id_apoderado','$telefono','$direccion','$id_beneficiario','$btalla','$bpeso','$imagen')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($id_inscripcion,$id_apoderado,$telefono,$direccion,$id_beneficiario,$btalla,$bpeso,$imagen)
	{
		$sql="UPDATE inscripcion SET id_apoderado='$id_apoderado',telefono='$telefono',direccion='$direccion',id_beneficiario='$id_beneficiario',btalla='$btalla',bpeso='$bpeso',imagen='$imagen' WHERE id_inscripcion='$id_inscripcion'";
		return ejecutarConsulta($sql);
	}

 

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_inscripcion)
	{
		$sql="SELECT * FROM inscripcion WHERE id_inscripcion='$id_inscripcion'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT i.id_inscripcion, CONCAT(p1.vapepaterno, ' ', p1.vapematerno, ' ',p1.vnombres) as 'Apoderado', i.telefono, CONCAT(p2.vapepaterno, ' ', p2.vapematerno, ' ',p2.vnombres) as 'Beneficiario',i.direccion, i.btalla, i.bpeso, i.imagen,i.fec_registro from inscripcion i INNER join persona p1 on p1.id_persona = i.id_apoderado INNER JOIN persona p2 ON p2.id_persona = i.id_beneficiario";
		return ejecutarConsulta($sql);		
	}

	 public function selectinse()
	 {
	 	$sql="SELECT es.id_inscripcion ,es.id_apoderado,es.telefono ,es.direccion, CONCAT(e.vapepaterno , ' ' , e.vapematerno , ' ' , e.vnombres) as 'espe' FROM inscripcion es INNER JOIN persona e on e.id_persona = es.id_beneficiario";
	 	return ejecutarConsulta($sql);		
	 }	

	  public function selectalento()
	 {
	 	$sql="SELECT es.id_inscripcion ,es.id_apoderado,es.telefono ,es.direccion, CONCAT(e.vapepaterno , ' ' , e.vapematerno , ' ' , e.vnombres) as 'talento' FROM inscripcion es INNER JOIN persona e on e.id_persona = es.id_beneficiario";
	 	return ejecutarConsulta($sql);		
	 }	

 
}

?>