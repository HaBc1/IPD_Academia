<?php 
require_once "../modelos/Competicion.php";

$competicion=new Competicion();

$id_competicion = isset($_POST["id_competicion"])? limpiarCadena($_POST["id_competicion"]):"";
$nom_competicion = isset($_POST["nom_competicion"])? limpiarCadena($_POST["nom_competicion"]):"";
$fec_competicion = isset($_POST["fec_competicion"])? limpiarCadena($_POST["fec_competicion"]):"";
$fecha_fin = isset($_POST["fecha_fin"])? limpiarCadena($_POST["fecha_fin"]):"";
$fec_reg = isset($_POST["fec_reg"])? limpiarCadena($_POST["fec_reg"]):"";
$ubigeo = isset($_POST["ubigeo"])? limpiarCadena($_POST["ubigeo"]):"";
$direccion = isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";


switch ($_GET["op"]) 
{
	case 'guardaryeditar':
		 if(empty($id_competicion))
		 {
			$rspta=$competicion->insertar($nom_competicion, $fec_competicion, $fecha_fin, $ubigeo, $direccion);
		 	echo $rspta ? "Persona Registrado" : "Persona No Se Logro Registrar";
		 }else
		 {
		 $rspta=$competicion->editar($nom_competicion, $fec_competicion, $fecha_fin, $ubigeo, $direccion);
		 	echo $rspta ? "Persona Actualizada" : "Persona No Se Logro Actualizar";
		 }
		break;

	case 'mostrar':
		 $rspta=$competicion->mostrar($id_competicion);
		 echo json_encode($rspta);
		break;
		
	 case 'listar':
		 $rspta=$competicion->listar();
		 $data =array();
		 while ($reg=$rspta->fetch_object()) {
		 	 $data[]=array(
		 	 	"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_competicion.')"><i class="fa fa-pencil"></i></button>',
		 	 	"1"=>$reg->nom_competicion,
		 	 	"2"=>$reg->fec_competicion,
		 	 	"3"=>$reg->fecha_fin,
		 	 	"4"=>$reg->fec_reg,
		 	 	"5"=>$reg->ubigeo,
		 	 	"6"=>$reg->direccion 	 
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