<?php

// Initialize site configuration
require_once('includes/config.inc.php');
if ($_SERVER["REQUEST_METHOD"]='GET') {
	if (isset($_GET['ida']) && intval($_GET['ida'])) {
	$usrEdit=Justificante::getById($_GET['ida']);
	echo json_encode($usrEdit);
	}
}
redirect_to('index.php');
 ?>
