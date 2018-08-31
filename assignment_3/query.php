<?php

require "config.php";

// Create connection
$conn = mysqli_connect($server, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



// For now, this query select the nubmer of customers from each country.
// For assignment 3: change this part so that you can get the number of cities for each country. Then, sort the result in descending order. 
$sql = "Select country_id, count(*) as count from customer as c
		JOIN address as a on a.address_id=c.address_id
		JOIN city as t on t.city_id=a.city_id
		GROUP BY country_id;";
$result = mysqli_query($conn, $sql);


// This loop outputs the query result in a CSV format.
echo "country_id,num_customers\n";

if (mysqli_num_rows($result) > 0) {   
    while($row = mysqli_fetch_assoc($result)) {
        // var_dump($row);
        echo $row["country_id"] . "," . $row['count'];
        echo "\n";
    }
} else {
    echo "No results..";
}

?>