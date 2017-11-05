 <?php 
require_once "../modelos/Test.php";

$test=new Test();

$id_test = isset($_POST["id_test"])? limpiarCadena($_POST["id_test"]):"";
$descripcion_test = isset($_POST["descripcion_test"])? limpiarCadena($_POST["descripcion_test"]):"";
$id_inscripcion = isset($_POST["id_inscripcion"])? limpiarCadena($_POST["id_inscripcion"]):"";
$id_especialista = isset($_POST["id_especialista"])? limpiarCadena($_POST["id_especialista"]):"";
$resultado = isset($_POST["resultado"])? limpiarCadena($_POST["resultado"]):"";
$fecha_registro = isset($_POST["fecha_registro"])? limpiarCadena($_POST["fecha_registro"]):"";
 

switch ($_GET["op"]) 
{
	case 'guardaryeditar':
		 if(empty($id_test))
		 {
			$rspta=$test->insertar($descripcion_test, $id_inscripcion, $id_especialista, $resultado);
		 	echo $rspta ? "Test Registrado" : "Test No Se Logro Registrar";
		 }else
		 {
		 $rspta=$test->editar($id_test, $descripcion_test, $id_inscripcion, $id_especialista, $resultado);
		 	echo $rspta ? "Test Actualizada" : "Test No Se Logro Actualizar";
		 }
		break;

	case 'mostrar':
		 $rspta=$test->mostrar($id_test);
		 echo json_encode($rspta);
		break;

	case 'listar':
		$rspta=$test->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->id_test.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="eliminar('.$reg->id_test.')"><i class="fa fa-trash"></i></button>',
 				"1"=>$reg->descripcion_test,
 				"2"=>$reg->id_especialista,
 				"3"=>$reg->resultado,
 				"4"=>$reg->id_beneficiario,
 				"5"=>$reg->fecha_registro
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
		require_once "../modelos/Especialista.php";
		$especialista = new Especialista();

		$rspta = $especialista->selecte();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_especialista . ' > '  .  $reg->especialistas . '</option>';
				}
			break;


			case 'selectinse':
		require_once "../modelos/Inscripcion.php";
		$inscripcion = new Inscripcion();

		$rspta = $inscripcion->selectinse();

		while ($reg = $rspta->fetch_object())
				{
				echo '<option value=' . $reg->id_inscripcion . ' > '  .  $reg->espe . '</option>';
				}
			break;

}

 ?>