 <?php 
require_once "../modelos/Disciplina.php";

$disciplina=new Disciplina();

$id_coddisciplina = isset($_POST["id_coddisciplina"])? limpiarCadena($_POST["id_coddisciplina"]):"";
$ddescripcion = isset($_POST["ddescripcion"])? limpiarCadena($_POST["ddescripcion"]):"";
$id_codtipo = isset($_POST["id_codtipo"])? limpiarCadena($_POST["id_codtipo"]):"";
$fec_creacion = isset($_POST["fec_creacion"])? limpiarCadena($_POST["fec_creacion"]):"";
$estado = isset($_POST["estado"])? limpiarCadena($_POST["estado"]):"";


switch ($_GET["op"]) 
{

	case 'desactivar':
		$rspta=$disciplina->desactivar($id_coddisciplina);
 		echo $rspta ? "Disciplina Inactivo" : "Artículo no se puede desactivar";
	break;

	case 'activar':
		$rspta=$disciplina->activar($id_coddisciplina);
 		echo $rspta ? "Disciplina activado" : "Artículo no se puede activar";
	break;
	 
	case 'mostrar':
		 $rspta=$disciplina->mostrar($id_coddisciplina);
		 echo json_encode($rspta);
		break;
		
	 case 'listar':
		 $rspta=$disciplina->listar();
		 $data =array();
		 while ($reg=$rspta->fetch_object()) {
		 	 $data[]=array(
		 	 "0"=>($reg->estado)?''.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->id_coddisciplina.')"><i class="fa fa-close"></i></button>':
 					''.
 					' <button class="btn btn-primary" onclick="activar('.$reg->id_coddisciplina.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->ddescripcion,
 				"2"=>$reg->id_codtipo,
 				"3"=>$reg->fec_creacion,							 
 				"4"=>($reg->estado)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Inactivo</span>'
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