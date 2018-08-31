<html>
<head>
    <style>
    table,
    td {
        border: 1px solid gray;
    }

    </style>
</head>
<body>

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
$sql = "Select * from city LIMIT 20;";
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

echo "<br><br>";

// Task 1, 2: Selecting Cities
$sql = "SELECT first_name, last_name, email, address, city from customer as c 
        JOIN address as a on c.address_id = a.address_id 
        JOIN city as t on t.city_id = a.city_id
        ORDER BY c.last_name DESC LIMIT 20;";
$result = mysqli_query($conn, $sql);

echo "<table>";
if (mysqli_num_rows($result) > 0) {   
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // var_dump($row);
        echo "<td>" . $row["first_name"] . " " . $row['last_name'] . "</td><td>". $row['email'] 
        . "</td><td>". $row['address'] . "</td><td>". $row['city'] . "</td>";
        echo "<br>";
        echo "</tr>";
    }
} else {
    echo "No results..";
}
echo "</table>";

// Close the connection.
mysqli_close($conn);


?>

</body>
</html>