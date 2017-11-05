var tabla;

function init()
{
	mostrarform(false);
	listar();
	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);
	})
	$.post("../ajax/horario.php?op=selectComplejo", function(r){
	            $("#id_complejo").html(r);
	            $('#id_complejo').selectpicker('refresh');

	});

	$.post("../ajax/horario.php?op=selectDisciplina", function(r){
	            $("#id_coddisciplina").html(r);
	            $('#id_coddisciplina').selectpicker('refresh');

	});
}

function limpiar()

{
	 
	$("#id_horario").val("");
	$("#id_complejo").val("");
	$("#id_coddisciplina").val("");
	$("#dia").val("");
	$("#hora_inicio").val("");
	$("#hora_fin").val("");
	$("#fec_creacion").val("");
	$("#fec_creacion").val("");

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
		url: '../ajax/horario.php?op=listar',
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
			url: "../ajax/horario.php?op=guardaryeditar",
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

function mostrar(id_persona)
{
		$.post("../ajax/persona.php?op=mostrar",{id_persona : id_persona}, function (data, status)
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
			$("#id_persona").val(data.id_persona);
				
	
		
		})
}


init();