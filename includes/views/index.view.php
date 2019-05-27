<?php
	require_once("header.inc.php");
?>
	<br />
<h1>prueba</h1>
  <div>
    <form action="insertar.php" id="formulario" method="POST" enctype="multipart/form-data">
      <h4>Numero de cuenta</h4>
      <input type="text" name="numeroDeCuenta"><br>
      <p>Fecha</p>
      <input type="date" name="fechaVigencia"> &nbsp;
      <p><input type="date" name="fechaInicial" > &nbsp;A &nbsp; <input type="date" name="fechaFinal"></p>
      <input   type="email" name="correoTutor" placeholder="@gmail.com">
      <input  type="email" name="correoCordinador" placeholder="@gmail.com">
      <p><select name="motivo" >
          <option value="enfermedad">Enfermedad</option>

          <option value="Viaje">viaje</option>
        </select>
      </p>
        <TEXTAREA rows="5" cols="30" name="descripcion">Descripcion...</TEXTAREA>
        <p><input type="file" name="evidencia"></p>
        <input type="text" name="status" ><br>
        <input type="submit" value="enviar" name="enviar">
    </form>
  </div>
<div>
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

  	      <td><button onclick="edit($(this).val())" value="<?php echo $j->id; ?>" >Editar</button>
              	<button value="<?php echo $j->id;?>" onclick="verifica('borrar.php?id=<?php echo $j->id; ?>')">Borrar</button>
          </td>
        	    </tr>
        <?php $i++;}
        ?>
   </tbody>
   </table>
</div>


<div class="modal" id='addUsuario'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Agregar</p>
      <button class="delete" aria-label="close" onclick="$('#addUsuario').removeClass('is-active');"></button>
    </header>
    <section class="modal-card-body">
          <form action="editar.php" id="form" method="get">
            <h4>Numero de cuenta</h4>
            <input type="text" name="numeroDeCuenta"><br>
            <p>Fecha</p>
            <input type="date" name="fechaVigencia"> &nbsp;
            <p><input type="date" name="fechaInicial" > &nbsp;A &nbsp; <input type="date" name="fechaFinal"></p>
            <input   type="email" name="correoTutor" placeholder="@gmail.com">
            <input  type="email" name="correoCordinador" placeholder="@gmail.com">
            <p><select name="motivo" >
                <option value="enfermedad">Enfermedad</option>
                <option value="personal">Personal</option>
                <option value="Viaje">viaje</option>
              </select>
            </p>
              <TEXTAREA rows="5" cols="30" name="descripcion">Descripcion...</TEXTAREA>
              <p><input type="file" name="evidencia"></p>
              <input type="text" name="status" ><br>
              <input type="submit" value="enviar" name="enviar">


    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Guardar</button>
     <input type="hidden" name="id" id="id">
    </form>

    <button class="button" onclick="$('#addUsuario').removeClass('is-active');" >Cancelar</button>
      </footer>
  </div>
</div>
	<br />
<?php
	require_once("footer.inc.php");
?>
