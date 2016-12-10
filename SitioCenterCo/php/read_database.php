
<?php

// Saved the query in a variable.    
$query = "SELECT * FROM users";

// Used a predifined function to run the queries and saved it inside the variable $result.
$result = mysqli_query($connection, $query);

// Checked if the query ran successfuly.
    if(!$result){
        die('Query Failed' . mysqli_error());
    }

?>