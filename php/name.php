<?php

echo "POST Variables <br>";
$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
echo $firstname . " " . $lastname;

echo "<br><br>";

echo "GET Variables <br>";
$firstname = $_GET["first_name"];
$lastname = $_GET["last_name"];

echo $firstname . " " . $lastname;
?>