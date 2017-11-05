<?php 
require_once "../modelos/Talento.php";

$talento=new Talento();

$id_talento = isset($_POST["id_talento"])? limpiarCadena($_POST["id_talento"]):"";
$id_inscripcion = isset($_POST["id_inscripcion"])? limpiarCadena($_POST["id_inscripcion"]):"";
$id_disciplina = isset($_POST["id_disciplina"])? limpiarCadena($_POST["id_disciplina"]):"";
$fec_registro = isset($_POST["fec_registro"])? limpiarCadena($_POST["fec_registro"]):"";


switch ($_GET["op"]) 
{
	case 'guardaryeditar':
		 if(empty($id_talento))
		 {
			$rspta=$talento->insertar($id_inscripcion, $id_disciplina);
		 	echo $rspta ? "Persona Registrado" : "Persona No Se Logro Registrar";
		 }else
		 {
		 $rspta=$talento->editar($id_talento,$id_inscripcion, $id_disciplina);
		 	echo $rspta ? "Persona Actualizada" : "Persona No Se Logro Actualizar";
		 }
		break;

	case 'mostrar':
		 $rspta=$talento->mostrar($id_talento);
		 echo json_encode($rspta);
		break;
		
	 case 'listar':
		 $rspta=$talento->listar();
		 $data =array();
		 while ($reg=$rspta->fetch_object()) {
		 	 $data[]=array(
		 	 	"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_talento.')"><i class="fa fa-pencil"></i></button>',
		 	 	"1"=>$reg->id_inscripcion,
		 	 	"2"=>$reg->id_disciplina,
		 	 	"3"=>$reg->fec_registro
		 	
		 	 	
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

 
				case 'selectalento':
		require_once "../modelos/Inscripcion.php";
		$inscripcion = new Inscripcion();

		$rspta = $inscripcion->selectalento();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_inscripcion . ' > '  .  $reg->talento . '</option>';
				}
			break;


				case 'selectdiss':
		require_once "../modelos/Disciplina.php";
		$disciplina = new Disciplina();

		$rspta = $disciplina->selectdiss();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_disciplina . ' > '  .  $reg->ddescripcion . '</option>';
				}
			break;

}

 ?>