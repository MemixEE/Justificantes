<?php
	require_once("header.inc.php");
?>

<div class="container-fluid">
	<a class="btn btn-success btn-lg float-right" href="includes/views/insert.view.php">Agregar</a>
  <table class="table table-striped">
  	  <thead>
  	    <tr>
  	       	<th>#</th>
  		    <th>numero de cuenta </th>
  		    <th>fecha inicial</th>
          <th>fecha final</th>
  		    <th>correo Tutor</th>
          <th>correo cordinador</th>
          <th>motivo</th>
          <th>descripcion</th>
          <th>evidencia</th>
          <th>status</th>
          <th>Acciones</th>
  	    </tr>
  	  </thead>
  	  <tbody>
        <?php
         $i=1;
         foreach ($jus as $j) {
        ?>
        <tr>
  	      <th><?php echo $i;?></th>
  	      <td><?php echo $j->numeroDeCuenta;?></td>
  	      <td><?php echo $j->fechaInicial;?></td>
          <td><?php echo $j->fechaFinal;?></td>
  	      <td><?php echo $j->correoTutor;?></td>
           <td><?php echo $j->correoCordinador;?></td>
            <td><?php echo $j->motivo;?></td>
             <td><?php echo $j->descripcion;?></td>
              <td><?php echo $j->evidencia;?></td>
               <td><?php echo $j->status;?></td>

  	      <td> <a class="btn btn-primary" href="editar.php?id=<?php echo $j->id; ?>" value="<?php echo $j->id; ?>" >Editar</a>&nbsp;
              	<button class="btn btn-danger" value="<?php echo $j->id;?>" onclick="verifica('borrar.php?id=<?php echo $j->id; ?>')">Borrar</button>
          </td>
        	    </tr>
        <?php $i++;}
        ?>
   </tbody>
   </table>



	<script>

		function update(x){
		console.log(x);
		$.get( "editar.php", { id: x } )
			.done(function( data ) {
				console.log(data);
				var usr = JSON.parse(data);
				console.log(usr);
			});
	}
	</script>

</div>
<?php
	require_once("footer.inc.php");
?>
