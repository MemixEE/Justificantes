<?php
	require_once("header.inc.php");
?>

<a href="includes/views/insert.view.php">Insertar</a>
  <table>
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

  	      <td> <a href="editar.php?id=<?php echo $j->id; ?>" value="<?php echo $j->id; ?>" >Editar</a>
              	<button value="<?php echo $j->id;?>" onclick="verifica('borrar.php?id=<?php echo $j->id; ?>')">Borrar</button>
          </td>
        	    </tr>
        <?php $i++;}
        ?>
   </tbody>
   </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1>que onda</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
<?php
	require_once("footer.inc.php");
?>
