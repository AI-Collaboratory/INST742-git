<?php 

$animal = $_POST["animal"];

if (isset($animal)){
	// $animal = stripslashes($animal);
	$animal = str_replace(' ', '', $animal);
	echo "Received <strong>" . $animal . "</strong> from the form.";
} else {
	echo "Nothing was received...";
}

?>