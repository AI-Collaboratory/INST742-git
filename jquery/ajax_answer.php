<?php

$sentence = $_POST["data"];

// write code here
$first = split("Received", $sentence)[0];
echo $first;
?>