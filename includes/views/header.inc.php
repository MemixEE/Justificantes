<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script
		  src="https://code.jquery.com/jquery-2.2.4.min.js"
		  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		  crossorigin="anonymous">
  	</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
</script>


<body>

	<div class="jumbotron text-center">
 		<h2>Control de Justificantes</h2>
	</div>

	<section class="hero is-medium is-primary">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Universidad de Colima
        </h1>
        <h2 class="subtitle">
          Facultad de Telematica
        </h2>
      </div>
    </div>
