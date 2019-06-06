<?php

require_once('includes/config.inc.php');

print_r($_POST);
if (isset($_FILES['evidencia']['tmp_name']) && strlen($_FILES['evidencia']['tmp_name'])>4)
	 	{
		  $nombre=$_FILES['evidencia']['name'];
			//$nomArchivo = $nombre;
			$nombre=strtolower($nombre);
			$cadena_1=array(" ","ñ","á","é","í","ó","ú","à","è","ì","ò","ù","ü");
			$cadena_2=array("_","n","a","e","i","o","u","a","e","i","o","u","u");
			$nombre=str_replace($cadena_1, $cadena_2, $nombre);
			$nombre=preg_replace('/[^0-9a-z\.\_\-]/i','',$nombre);
			$nombre=number_format(rand(1,9999),0,'','')."_".$nombre;
		  $destino = '/opt/lampp/htdocs/Justificantes/img';

			$tamano = intval($_FILES['evidencia']['size']);

			if($tamano < 10485760)
			{

				if (copy($_FILES['evidencia']['tmp_name'],$destino.'/'.$nombre))
				{
					$archivo = $nombre;
				}
				else
				{
					die("Error al subir el archivo");
				}

			}
			else
			{
				die('No se pudo subir el archivo '.$_FILES['evidencia']['name'].' Verifique que el archivo no esté abierto y que no exceda el tamaño máximo permitido.');
			}

		}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['id']) && intval($_POST['id'])){
        $id=$_POST["id"];
        $numeroDeCuenta=$_POST["numeroDeCuenta"];
        $fechaCreacion=$_POST["fechaCreacion"];
        $fechaVigencia=$_POST["fechaVigencia"];
        $fechaInicial=$_POST["fechaInicial"];
        $fechaFinal=$_POST["fechaFinal"];
        $correoTutor=$_POST["correoTutor"];
        $correoCordinador=$_POST["correoCordinador"];
        $motivo=$_POST["motivo"];
        $descripcion=$_POST["descripcion"];
        //$evidencia=$_POST["evidencia"];
        $status=$_POST["status"];

        $agregaj = new Justificante();
        $agregaj ->id=$id;
        $agregaj ->numeroDeCuenta=$numeroDeCuenta;
        $agregaj ->fechaCreacion=$fechaCreacion;
        $agregaj ->fechaVigencia=$fechaVigencia;
        $agregaj ->fechaInicial=$fechaInicial;
        $agregaj ->fechaFinal=$fechaFinal;
        $agregaj ->correoTutor=$correoTutor;
        $agregaj ->correoCordinador=$correoCordinador;
        $agregaj ->motivo=$motivo;
        $agregaj ->descripcion=$descripcion;
        $agregaj ->evidencia="prueba.jpg";
        $agregaj ->status=$status;

        $agregaj ->save();

    }else{
      $numeroDeCuenta=$_POST["numeroDeCuenta"];
      $fechaVigencia=$_POST["fechaVigencia"];
      $fechaInicial=$_POST["fechaInicial"];
      $fechaFinal=$_POST["fechaFinal"];
      $correoTutor=$_POST["correoTutor"];
      $correoCordinador=$_POST["correoCordinador"];
      $motivo=$_POST["motivo"];
      $descripcion=$_POST["descripcion"];
      //$evidencia=$_POST["evidencia"];
      $status=$_POST["status"];

      $agregaj = new Justificante();
      $agregaj ->numeroDeCuenta=$numeroDeCuenta;
      $agregaj ->fechaVigencia=$fechaVigencia;
      $agregaj ->fechaInicial=$fechaInicial;
      $agregaj ->fechaFinal=$fechaFinal;
      $agregaj ->correoTutor=$correoTutor;
      $agregaj ->correoCordinador=$correoCordinador;
      $agregaj ->motivo=$motivo;
      $agregaj ->descripcion=$descripcion;
      $agregaj ->evidencia=$nombre;
      $agregaj ->status=$status;

      $agregaj ->save();

      //printf("El último registro insertado tiene el id %d\n", mysql_insert_id());
    }

}



redirect_to('')
?>
