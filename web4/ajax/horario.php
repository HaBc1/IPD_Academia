<?php 
require_once "../modelos/Horario.php";

$horario=new Horario();

$id_horario = isset($_POST["id_horario"])? limpiarCadena($_POST["id_horario"]):"";
$id_complejo = isset($_POST["id_complejo"])? limpiarCadena($_POST["id_complejo"]):"";
$id_coddisciplina = isset($_POST["id_coddisciplina"])? limpiarCadena($_POST["id_coddisciplina"]):"";
$dia = isset($_POST["dia"])? limpiarCadena($_POST["dia"]):"";
$hora_inicio = isset($_POST["hora_inicio"])? limpiarCadena($_POST["hora_inicio"]):"";
$hora_fin = isset($_POST["hora_fin"])? limpiarCadena($_POST["hora_fin"]):"";


switch ($_GET["op"]) 
{
	case 'guardaryeditar':
		 if(empty($id_horario))
		 {
			$rspta=$horario->insertar($id_complejo, $id_coddisciplina,$dia, $hora_inicio, $hora_fin);
		 	echo $rspta ? "Horario Registrado" : "Horario No Se Logro Registrar";
		 }else
		 {
		 $rspta=$horario->editar($id_horario,$id_complejo, $id_coddisciplina,$dia, $hora_inicio, $hora_fin);
		 	echo $rspta ? "Horario Actualizada" : "Horario No Se Logro Actualizar";
		 }
		break;

	case 'mostrar':
		 $rspta=$horario->mostrar($id_horario);
		 echo json_encode($rspta);
		break;
		
	 case 'listar':
		 $rspta=$horario->listar();
		 $data =array();
		 while ($reg=$rspta->fetch_object()) {
		 	 $data[]=array(
		 	 	"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_horario.')"><i class="fa fa-pencil"></i></button>',
		 	 	"1"=>$reg->complejo,
		 	 	"2"=>$reg->disciplina,
		 	 	"3"=>$reg->dia,
		 	 	"4"=>$reg->hora_inicio,
		 	 	"5"=>$reg->hora_fin,
		 	 	"6"=>$reg->fec_creacion
		 	 	 
		 	 	
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


case 'selectComplejo':
		require_once "../modelos/Complejo.php";
		$complejo = new Complejo();

		$rspta = $complejo->selectC();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_complejo . ' > ' . $reg->descripcioncomplejo .'</option>';
				}
			break;


case 'selectDisciplina':
		require_once "../modelos/Disciplina.php";
		$disciplina = new Disciplina();

		$rspta = $disciplina->selectdis();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_coddisciplina . ' > ' . $reg->ddescripcion .'</option>';
				}
			break;



}

 ?>