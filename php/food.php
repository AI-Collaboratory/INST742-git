<?php 

$food = $_POST["food"];

if (isset($food)){
	$food = str_replace(' ', '', $food);
	echo "Received <strong>" . $food . "</strong> from the form.";
} else {
	echo "Nothing was received...";
}

?>