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


// Select data from the "city" table.
$sql = "Select city_id, city, country_id from city LIMIT 20;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {   
    while($row = mysqli_fetch_assoc($result)) {
        // var_dump($row);
        echo $row["city_id"] . " " . $row['city'] . " ". $row['country_id'];
        echo "<br>";
    }
} else {
    echo "No results..";
}

echo "<br><br>";

// Select data by joining two tables
$sql = "SELECT city_id, city, country from city as c 
		JOIN country as o on c.country_id = o.country_id 
		ORDER BY c.city_id LIMIT 20;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {   
    while($row = mysqli_fetch_assoc($result)) {
        // var_dump($row);
        echo $row["city_id"] . " " . $row['city'] . " ". $row['country'];
        echo "<br>";
    }
} else {
    echo "No results..";
}


// Close the connection.
mysqli_close($conn);

?>