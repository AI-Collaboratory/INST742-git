<?php

$get = $_GET["name"];
$post = $_POST["name"];

if ($get){
	echo "Hello, " . $get . ". Received Data from _GET";
} else if ($post){
	echo "Hello, " . $post . ". Received Data from _POST";
} else {
	echo "Hello, I didn't received any data.";
}




?>