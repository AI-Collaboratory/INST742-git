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

function query_to_db($conn, $sql){
    $result = mysqli_query($conn, $sql);

    if ($result) {   
        echo "Your query was successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

// INSERTING.
$sql = "INSERT INTO language (name) VALUES ('Cantonese')";
query_to_db ($conn, $sql);

echo "<br><br>";

// // UPDATING
// $sql = "UPDATE language SET name='Chinese' WHERE name='Cantonese'";
// query_to_db ($conn, $sql);


// echo "<br><br>";


// // DELETING.
// $sql = "DELETE FROM language WHERE name='Spanish'";
// query_to_db ($conn, $sql);

// echo "<br><br>";


// // INSERTING to Relational Tables.
// $sql = "INSERT INTO language (name) VALUES ('Spanish')";

// if (mysqli_query($conn, $sql)) {   
//     echo "New record created successfully<br>";
//     $language_id = mysqli_insert_id($conn);
//     echo "Language ID just inserted is " . $language_id . "<br>";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// echo "<br>";

// $sql = "INSERT INTO film (title, language_id, rental_duration, rental_rate, replacement_cost) 
// VALUES ('Test', $language_id, 2, 0.5, 100)";

// if (mysqli_query($conn, $sql)) {   
//     echo "New record created successfully<br>";
//     // $film_id = mysqli_insert_id($conn);
//     echo "Film ID just inserted is " . $film_id . "<br>";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }


// echo "<br><br>";



// Close the connection.
mysqli_close($conn);

?>