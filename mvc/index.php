<?php
// Defining controllers and models to be used.


if (isset($_GET['controller'])) {
	$controller = $_GET['controller'];
} else {
	$controller = 'default';
}


// then, loads a view when loaded.
require_once('views/layout.php');
?>