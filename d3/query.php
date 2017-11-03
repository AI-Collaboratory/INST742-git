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
echo "country_id,num_customers\n";


// Select data from the "city" table.
$sql = "Select country_id, count(*) from customer as c
		JOIN address as a on a.address_id=c.address_id
		JOIN city as t on t.city_id=a.city_id
		GROUP BY country_id;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {   
    while($row = mysqli_fetch_assoc($result)) {
        // var_dump($row);
        echo $row["country_id"] . "," . $row['count(*)'];
        echo "\n";
    }
} else {
    echo "No results..";
}

?>