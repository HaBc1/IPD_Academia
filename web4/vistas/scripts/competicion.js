var tabla;

function init()
{
	mostrarform(false);
	listar();
	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);
	})
}

function limpiar()

{
	 
	$("#nom_competicion").val("");
	$("#ubigeo").val("");	
	$("#direccion").val("");
	$("#fec_competicion").val("");
	$("#fec_fin").val("");
	

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
		url: '../ajax/competicion.php?op=listar',
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
			url: "../ajax/competicion.php?op=guardaryeditar",
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

init();