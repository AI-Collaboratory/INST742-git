<?php

// Array for the result rows
$rows = array();

// Create connection
$conn = mysqli_connect('localhost', 'root', 'root', 'example');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql =
  'SELECT pg.created, pg.author, bd.host_type as type, pg.title, bd.body_text
    FROM page AS pg
    JOIN body AS bd ON pg.id = bd.host_id
    WHERE pg.id = ' . $argv[1] . ' AND bd.host_type = "P" AND bd.revision = (
      SELECT max(revision)
      FROM body
      WHERE host_id = ' . $argv[1] . ' AND host_type = "P"
    )
    
  UNION
  
  SELECT co.created, co.author, bd.host_type AS type, co.title, bd.body_text
    FROM comment AS co
    JOIN body AS bd ON co.id = bd.host_id
    WHERE co.page_id = ' . $argv[1] . ' AND bd.host_type = "C" AND bd.revision = (
      select max(revision)
      FROM body
      WHERE host_id = co.id AND host_type="C"
    )';


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
    // fetch the results into an array
    while( $rows[] = mysqli_fetch_assoc($result) ) {
      // code to process rows would go here
    }
    
    echo "<html>";
    echo "<head><title>" . $rows[0]['title'] . "</title></head>";
    echo "<body>";
    // Process the rows
    foreach( $rows as $row ){
      
      if(!empty($row)){
        
        if( $row['type'] == "P" ){
          
          echo '<h1>' . $row['title'] . '</h1>';
          echo '<small><i>Added by ' . $row['author'] . ' on ' . $row['created'] . '</i></small><br>';
          echo '<p>' . $row['body_text'] . '</p>';
          
        } elseif ( $row['type'] == "C" ) {
          
          echo '<blockquote><hr><h3>Comment: ' . $row['title'] . '</h3>';
          echo '<small><i>Added by ' . $row['author'] . ' on ' . $row['created'] . '</i></small><br>';
          echo '<p>' . $row['body_text'] . '</p></blockquote>';
          
        }        
      }
    }
    echo "</body></html>";
}

mysqli_close($conn);

?>