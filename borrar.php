<?php
//editar.php sirve obtiene el  id del usuario a editar y lo regresa para posteriormente usarlo para eliminar.
// Initialize site configuration
require_once('includes/config.inc.php');
if ($_SERVER["REQUEST_METHOD"]='GET') {
	if (isset($_GET['id']) && intval($_GET['id'])) {
		$id=$_GET['id'];
		$deleteUsr = new Justificante();
        $deleteUsr ->id=$id;
        $deleteUsr ->delete();
	}
}
redirect_to('index.php');
 ?>
