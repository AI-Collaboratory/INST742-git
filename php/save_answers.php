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
$answer1 = $_POST["q1"];
$answer1_1 = $_POST["q11"];


echo "Submitted Data: <br>";
echo "The user is adult? " . $answer1 . "<br>";

if ($answer1 == "yes"){
	echo "The user's weekly alcohol consumption frequecy: " . $answer1_1 . " times/week. ";
}

echo "<br><br>";

// You need to save the data into the database.
$sql = "INSERT INTO alcohol (adult, alcohol_freq) VALUES ('$answer1', '$answer1_1');";
query_to_db($conn, $sql);



echo "<br>THANKS FOR YOUR ANSWERS";

mysqli_close($conn);










?>