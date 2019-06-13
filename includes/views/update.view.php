<?php
	require_once("header.inc.php");
?>

<div class="container">
  <form action="/Justificantes/insertar.php" id="formulario" method="POST" enctype="multipart/form-data">
    <h4>Numero de cuenta</h4>
    <input class="form-control" type="text" name="numeroDeCuenta" value="<?php echo $objeto->numeroDeCuenta ?>">&nbsp;
    <!--<input type="text" name="numeroDeCuenta"><br>-->
    <h4>fecha creacion</h4>
    <input class="form-control" type="text" name="fechaCreacion" value="<?php echo $objeto->fechaCreacion ?>">&nbsp;

    <h5>Fecha</h5>
    <input class="form-control" type="datetime" name="fechaVigencia" value="<?php echo $objeto->fechaVigencia?>">&nbsp;
    <!--<input type="date" name="fechaVigencia"> &nbsp;-->

    <h5>De</h5>
    <input class="form-control" type="datetime" name="fechaInicial" value="<?php echo $objeto->fechaInicial?>"> &nbsp;

    <h5>A</h5>
    <input class="form-control" type="datetime" name="fechaFinal"  value="<?php echo $objeto->fechaFinal?>"> &nbsp;
    <!--<p><input type="date" name="fechaInicial" > &nbsp;A &nbsp; <input type="date" name="fechaFinal"></p>-->

    <h5>Tutor</h5>
    <input class="form-control" type="email" name="correoTutor" placeholder="@gmail.com" value="<?php echo $objeto->correoTutor?>">
    <!--<input type="email" name="correoTutor" placeholder="@gmail.com"> -->

			<h5>Coordinador</h5>
			<input class="form-control" type="email" name="correoCordinador" placeholder="@gmail.com" value="<?php echo $objeto->correoCordinador?>">&nbsp;
      <!--<input  type="email" name="correoCordinador" placeholder="@gmail.com"> -->

      <h5>Motivo</h5>
			<div class="form-group">
  			<select class="custom-select" name="motivo">
            <option value="enfermedad">Enfermedad</option>
            <option value="Viaje">viaje</option>
  				  <!--<option value="Asuntop">Asunto personal</option>
  					<option value="Escolar">escolar</option>
  					<option value="PartDeporte">participación en Deporte</option>
  					<option value="Personal">personal</option>-->
        </select>
			</div>

      <TEXTAREA class="form-control" rows="5" cols="30" name="descripcion" placeholder="Descripcion..."><?php echo $objeto->descripcion?></TEXTAREA>&nbsp;

      <h5>Evidencia</h5>
      <div class="custom-file">
      <input type="file" class="custom-file-input" id="evidencia" name="evidencia">
      <label class="custom-file-label" for="validatedCustomFile">Seleccionar archivo...</label>
      <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div>&nbsp;

      <div class="form-group">
        <select class="custom-select" name="status">
            <option value="Aceptado">Aceptado</option>
            <option value="Rechazado">Rechazado</option>
        </select>
      </div>

      <input class="btn btn-success" type="hidden" name="id" value="<?php echo $objeto->id?>">
      <input class="btn btn-success" type="submit" value="Enviar" name="enviar">

      <a class="btn btn-danger" href="/Justificantes/index.php">Cancelar</a>
  </form>
</div>
  <?php
  	require_once("footer.inc.php");
  ?>
