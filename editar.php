<?php
//editar.php sirve obtiene el  id del usuario a editar y lo regresa para posteriormente usarlo.
// Initialize site configuration
require_once('includes/config.inc.php');
if ($_SERVER['REQUEST_METHOD'] = 'GET'){
  if (isset($_GET['id']) && intval($_GET['id'])) {
    $objeto = Justificante::getById($_GET['id']);//metodo para obtener el elemento.
    //echo(json_encode($objeto));
    //echo(json_encode($objeto->numeroDeCuenta));
  }
}
require_once(VIEW_PATH.'update.view.php');
