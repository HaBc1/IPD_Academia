<?php 
require_once "../modelos/Complejo.php";

$complejo=new Complejo();

$id_complejo = isset($_POST["id_complejo"])? limpiarCadena($_POST["id_complejo"]):"";
$descripcioncomplejo = isset($_POST["descripcioncomplejo"])? limpiarCadena($_POST["descripcioncomplejo"]):"";
$ubigeo = isset($_POST["ubigeo"])? limpiarCadena($_POST["ubigeo"]):"";
$direccion = isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$telefono = isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
 

switch ($_GET["op"]) 
{
	case 'guardaryeditar':
		 if(empty($id_complejo))
		 {
			$rspta=$complejo->insertar($descripcioncomplejo, $ubigeo, $direccion, $telefono);
		 	echo $rspta ? "Complejo Registrado" : "Complejo No Se Logro Registrar";
		 }else
		 {
		 $rspta=$complejo->editar($id_complejo,$descripcioncomplejo, $ubigeo, $direccion, $telefono);
		 	echo $rspta ? "Complejo Actualizada" : "Complejo No Se Logro Actualizar";
		 }
		break;

	case 'mostrar':
		 $rspta=$complejo->mostrar($id_complejo);
		 echo json_encode($rspta);
		break;
		
	 case 'listar':
		 $rspta=$complejo->listar();
		 $data =array();
		 while ($reg=$rspta->fetch_object()) {
		 	 $data[]=array(
		 	 	"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_complejo.')"><i class="fa fa-pencil"></i></button>',
		 	 	"1"=>$reg->Complejo,
		 	 	"2"=>$reg->Ubigeo,
		 	 	"3"=>$reg->Direccion,
		 	 	"4"=>$reg->Telefono
		 	 	);
		 }
		 $results =  array(
			"sEcho"=>1,
			"iTotalRecords"=>count($data),
			"iTotalDisplayRecords"=>count($data),
			"aaData"=>$data

		 	);
		 echo json_encode($results);
		break;
}

 ?>