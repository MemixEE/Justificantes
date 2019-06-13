<?php
//Sirve para obtener todos los registros de la base de datos.
// Initialize site configuration
require_once('includes/config.inc.php');
$jus=Justificante::getAll();

// Include page view
require_once(VIEW_PATH.'index.view.php');
