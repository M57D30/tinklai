<?php

define ('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_DATABASE', 'disease_research_center');

include_once('DatabaseConnection.php');
$db = new DatabaseConnection;

?>