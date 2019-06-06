
<div class="container">
<div>

  <form action="insertar.php" id="formulario" method="POST" enctype="multipart/form-data">
    <h4>Numero de cuenta</h4>
    <input class="form-control" type="text" name="numeroDeCuenta" value="<?php echo $objeto->numeroDeCuenta ?>">
    <!--<input type="text" name="numeroDeCuenta"><br>-->
    <h4>fecha creacion</h4>
    <input class="form-control" type="text" name="fechaCreacion" value="<?php echo $objeto->fechaCreacion ?>">

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

    <input  type="email" name="correoCordinador" placeholder="@gmail.com" value="<?php echo $objeto->correoCordinador?>" >

    <p><select name="motivo" >
        <option value="enfermedad">Enfermedad</option>
        <option value="Viaje">viaje</option>
      </select>
    </p>
      <TEXTAREA rows="5" cols="30" name="descripcion"><?php echo $objeto->descripcion?></TEXTAREA>
      <p><input type="file" name="evidencia"></p>
      <input type="text" name="status"><br>
      <input type="hidden" name="id" value="<?php echo $objeto->id?>">
      <input type="submit" value="enviar" name="enviar">
      <a href="/Justificantes/index.php">Cancelar</a>
  </form>
</div>
<div>
