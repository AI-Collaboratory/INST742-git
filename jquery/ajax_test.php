<?php

$get = $_GET["name"];
$post = $_POST["name"];

if ($get){
	echo "Hello, " . $get . ". Received Data from _GET";
} else if ($post){
	// echo "Hello, " . $post . ". Received Data from _POST";
	echo "<img src='sample_images/" . $post . ".png'>";
} else {
	echo "Hello, I didn't received any data.";
}




?>