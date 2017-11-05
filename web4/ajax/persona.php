<?php 
require_once "../modelos/Persona.php";

$persona=new Persona();

$id_persona = isset($_POST["id_persona"])? limpiarCadena($_POST["id_persona"]):"";
$dnipersona = isset($_POST["dnipersona"])? limpiarCadena($_POST["dnipersona"]):"";
$vapepaterno = isset($_POST["vapepaterno"])? limpiarCadena($_POST["vapepaterno"]):"";
$vapematerno = isset($_POST["vapematerno"])? limpiarCadena($_POST["vapematerno"]):"";
$vnombres = isset($_POST["vnombres"])? limpiarCadena($_POST["vnombres"]):"";
$sexo = isset($_POST["sexo"])? limpiarCadena($_POST["sexo"]):"";
$estadocivil = isset($_POST["estadocivil"])? limpiarCadena($_POST["estadocivil"]):"";
$fec_nacimiento = isset($_POST["fec_nacimiento"])? limpiarCadena($_POST["fec_nacimiento"]):"";
$email = isset($_POST["email"])? limpiarCadena($_POST["email"]):"";

switch ($_GET["op"]) 
{
	case 'guardaryeditar':
		 if(empty($id_persona))
		 {
			$rspta=$persona->insertar($dnipersona, $vapepaterno, $vapematerno, $vnombres, $sexo, $estadocivil, $fec_nacimiento,$email);
		 	echo $rspta ? "Persona Registrado" : "Persona No Se Logro Registrar";
		 }else
		 {
		 $rspta=$persona->editar($id_persona,$dnipersona, $vapepaterno, $vapematerno, $vnombres, $sexo, $estadocivil, $fec_nacimiento,$email);
		 	echo $rspta ? "Persona Actualizada" : "Persona No Se Logro Actualizar";
		 }
		break;

	case 'mostrar':
		 $rspta=$persona->mostrar($id_persona);
		 echo json_encode($rspta);
		break;
		
	 case 'listar':
		 $rspta=$persona->listar();
		 $data =array();
		 while ($reg=$rspta->fetch_object()) {
		 	 $data[]=array(
		 	 	"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_persona.')"><i class="fa fa-pencil"></i></button>',
		 	 	"1"=>$reg->dnipersona,
		 	 	"2"=>$reg->vapepaterno,
		 	 	"3"=>$reg->vapematerno,
		 	 	"4"=>$reg->vnombres,
		 	 	"5"=>$reg->sexo,
		 	 	"6"=>$reg->estadocivil,
		 	 	"7"=>$reg->fec_nacimiento,
		 	 	"8"=>$reg->fec_creacion,
		 	 	"9"=>$reg->email
		 	 	
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