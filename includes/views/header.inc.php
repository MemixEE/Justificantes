<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>

<script
	src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	crossorigin="anonymous">
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<script>
function verifica(ruta){
			var a= confirm("Borrar todo?");
			if (a==true) {
				window.location.href=ruta;
			}else{
				return;
			}
		}
		function edit(a){
				$.get( "editar.php", { ida: a} )
					.done(function(respuesta) {
					console.log(respuesta);
					var obj= JSON.parse(respuesta);
					//console.log();
					$("#numeroDeCuenta").val(obj.numeroDeCuenta);
					$("#fechaInicial").val(obj.fechaInicial);
					$("#fechaFinal").val(obj.fechaFinal);
					$("#correoTutor").val(obj.correoTutor);
					$("#correoCordinador").val(obj.correoCordinador);
					$("#motivo").val(obj.motivo);
					$("#descripcion").val(obj.descripcion);
					$("#evidencia").val(obj.evidencia);
					$("#status").val(obj.status);
					$("#id").val(obj.id);
					$(".modal-card-title").text("Editar");
					$('#addUsuario').addClass('is-active');
				 });
		}
</script>
<body>
	<div class="jumbotron text-center">
 		<h2>Control de Justificantes</h2>
	</div>
