<?php

$server = "localhost";
$username = "root";
$password = "root";
$db = "sakila";

// Create connection
$conn = mysqli_connect($server, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br><br>";

// A function for general queries.
function query_to_db($conn, $sql){
    $result = mysqli_query($conn, $sql);

    if ($result) {   
        echo "Your query was successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


// Receving the submitted data
$age = $_POST["age"];
$freq = $_POST["freq"];


echo "Submitted Data: <br>";
echo "Age? " . $age . "<br>";

if ($age > 21){
	echo "The user's weekly alcohol consumption frequecy: " . $freq . " times/week. ";
}

$answer1 = $age > 21 ? "yes" : "no";


// // You need to save the data into the database.
$sql = "INSERT INTO alcohol (adult, alcohol_freq) VALUES ('$answer1', '$freq');";
query_to_db($conn, $sql);




mysqli_close($conn);










?>