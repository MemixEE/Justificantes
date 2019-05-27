<?php

// Initialize site configuration
require_once('includes/config.inc.php');
$jus=Justificante::getAll();

// Include page view
require_once(VIEW_PATH.'index.view.php');
