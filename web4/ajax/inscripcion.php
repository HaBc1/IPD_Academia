<?php 
require_once "../modelos/Inscripcion.php";

$inscripcion=new Inscripcion();

$id_inscripcion=isset($_POST["id_inscripcion"])? limpiarCadena($_POST["id_inscripcion"]):"";
$id_apoderado=isset($_POST["id_apoderado"])? limpiarCadena($_POST["id_apoderado"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$id_beneficiario=isset($_POST["id_beneficiario"])? limpiarCadena($_POST["id_beneficiario"]):"";
$btalla=isset($_POST["btalla"])? limpiarCadena($_POST["btalla"]):"";
$bpeso=isset($_POST["bpeso"])? limpiarCadena($_POST["bpeso"]):"";
$imagen=isset($_POST["foto"])? limpiarCadena($_POST["foto"]):"";

switch ($_GET["op"]){
	
	case 'guardaryeditar':

		if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
			{
				$imagen = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/inscripcion/" . $imagen);
			}
		}
		if (empty($id_inscripcion)){
			$rspta=$inscripcion->insertar( $id_apoderado, $telefono, $direccion, $id_beneficiario,$btalla, $bpeso, $imagen);
			echo $rspta ? "Inscripcion registrado" : "Inscripcion no se pudo registrar";
		}
		else {
			$rspta=$inscripcion->editar($id_inscripcion,$id_apoderado, $telefono, $direccion, $id_beneficiario,$btalla, $bpeso, $imagen);
			echo $rspta ? "Inscripcion actualizado" : "Inscripcion no se pudo actualizar";
		}
	break;
 

	case 'mostrar':
		$rspta=$inscripcion->mostrar($id_inscripcion);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$inscripcion->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_inscripcion.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="eliminar('.$reg->id_inscripcion.')"><i class="fa fa-trash"></i></button>',
 				"1"=>$reg->Apoderado,
 				"2"=>$reg->telefono,
 				"3"=>$reg->Beneficiario,
 				"4"=>$reg->direccion,
 				"5"=>$reg->btalla,
 				"6"=>$reg->bpeso,
 				"7"=>"<img src='../files/inscripcion/".$reg->imagen."' height='50px' width='50px' >",
 				"8"=>$reg->fec_registro

 			 
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
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

			case 'selectnino':
		require_once "../modelos/Persona.php";
		$persona1 = new Persona();

		$rspta = $persona1->listarB();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_persona . ' > ' . $reg->vnombres . '  ' .  $reg->vapepaterno .'  ' .  $reg->vapepaterno . '</option>';
				}
			break;
 
}
?>