 <?php 
require_once "../modelos/Especialista.php";

$especialista=new Especialista();

$id_especialista = isset($_POST["id_especialista"])? limpiarCadena($_POST["id_especialista"]):"";
$id_persona = isset($_POST["id_persona"])? limpiarCadena($_POST["id_persona"]):"";
$telefono = isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$direccion = isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$fec_creacion = isset($_POST["fec_creacion"])? limpiarCadena($_POST["fec_creacion"]):"";


switch ($_GET["op"]) 
{

	case 'guardaryeditar':
		if (empty($id_especialista)){
			$rspta=$especialista->insertar($tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email);
			echo $rspta ? "Persona registrada" : "Persona no se pudo registrar";
		}
		else {
			$rspta=$especialista->editar($idpersona,$tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email);
			echo $rspta ? "Persona actualizada" : "Persona no se pudo actualizar";
		}
	break;
	 
	case 'mostrar':
		 $rspta=$especialista->mostrar($id_especialista);
		 echo json_encode($rspta);
		break;
		
	 case 'listar':
		 $rspta=$especialista->listar();
		 $data =array();
		 while ($reg=$rspta->fetch_object()) {
		 	 $data[]=array(
		 		"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_especialista.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="eliminar('.$reg->id_especialista.')"><i class="fa fa-trash"></i></button>',
 				"1"=>$reg->DNI,
 				"2"=>$reg->Especialista,
 				"3"=>$reg->Telefono,
 				"4"=>$reg->Direccion,	
 				"5"=>$reg->Fec_Creacion						 
 				
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

		case 'selectPersona':
		require_once "../modelos/Persona.php";
		$persona = new Persona();

		$rspta = $persona->listarP();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_persona . ' > ' . $reg->vnombres . '  ' .  $reg->vapepaterno .'  ' .  $reg->vapepaterno . '</option>';
				}
			break;

 
}

 ?>