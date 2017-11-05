var tabla;

function init()
{
	mostrarform(false);
	listar();
	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);
	})
		//Cargamos los items al select categoria
	$.post("../ajax/test.php?op=selectPersona", function(r){
	            $("#id_especialista").html(r);
	            $('#id_especialista').selectpicker('refresh');

	});
	$.post("../ajax/test.php?op=selectinse", function(r){
	            $("#id_inscripcion").html(r);
	            $('#id_inscripcion').selectpicker('refresh');

	});
}

function limpiar()

{
	 
	$("#id_test").val("");
	$("#descripcion_test").val("");
	$("#id_inscripcion").val("");
	$("#id_especialista").val("");
	$("#resultado").val("");
	$("#fecha_registro").val("");
	 

}

function mostrarform(flag)
{
	limpiar();
	if(flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

function cancelarform()
{
	limpiar();
	mostrarform(false);
}
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,
		"aServerSide": true,
		dom: 'Bfrtip',
		buttons:
		[
			'copyHtml5',
			'excelHtml5',
			'csvHtml5',
			'pdf'
		],
	"ajax":
	{
		url: '../ajax/test.php?op=listar',
		type : "get",
		dataType: "json",
		error: function (e)
		{
			console.log(e.responseText);
		}
	},
	"bDestroy": true,
	"iDisplayLength":5,
	"order": [[0, "desc"]]
	}).DataTable();
}

function guardaryeditar(e)
{
	e.preventDefault();
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);
	$.ajax(
		{
			url: "../ajax/test.php?op=guardaryeditar",
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,

			success: function(datos)
			{
				bootbox.alert(datos);
				mostrarform(false);
				tabla.ajax.reload();
			}
		});
	limpiar();
}

function mostrar(icodpersona)
{
		$.post("../ajax/persona.php?op=mostrar",{icodpersona : icodpersona}, function (data, status)
		{
			data = JSON.parse(data);
			mostrarform(true);

			$("#vapepaterno").val(data.vapepaterno);		
			$("#vapematerno").val(data.vapematerno);
			$("#vnombres").val(data.vnombres);	
			$("#sexo").val(data.sexo);	
			$("#estadocivil").val(data.estadocivil);
			$("#fec_nacimiento").val(data.fec_nacimiento);
			$("#email").val(data.email);
			$("#icodpersona").val(data.icodpersona);
				
	
		
		})
}


init();